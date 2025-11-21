<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Página principal
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/*
|--------------------------------------------------------------------------
| Artículos
|--------------------------------------------------------------------------
*/
Route::prefix('articulos')->group(function () {

    Route::get('/', function () {
        return view('articulos');
    });

    Route::get('/eco-moto-standard', fn () => view('articulos.detalle-ecoMoto-standard'));
    Route::get('/eco-moto-pro', fn () => view('articulos.detalle-ecoMoto-pro'));
    Route::get('/eco-scoot-max', fn () => view('articulos.detalle-ecoScoot-max'));
    Route::get('/eco-scoot-lite', fn () => view('articulos.detalle-ecoScoot-lite'));
    Route::get('/ecobike-one', fn () => view('articulos.detalle-ecoBike-one'));

});

/*
|--------------------------------------------------------------------------
| Imágenes
|--------------------------------------------------------------------------
*/
Route::get('/imagenes/{filename}', function (string $filename) {
    $safe = basename($filename);
    $path = base_path('imagenes/'.$safe);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path, [
        'Content-Type' => mime_content_type($path),
    ]);
});

/*
|--------------------------------------------------------------------------
| Rutas públicas
|--------------------------------------------------------------------------
*/
Route::get('/registrar-entrega-vehiculo', fn () => view('registrar-entrega-de-vehiculo'));
Route::get('/estado-vehiculo', fn () => view('estado-vehiculo'));

/*
|--------------------------------------------------------------------------
| Autenticación
|--------------------------------------------------------------------------
*/
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->name('login.store');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

Route::get('/register', fn () => view('auth.register'))
        ->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])
        ->name('register.store');

/*
|--------------------------------------------------------------------------
| Zona protegida (solo usuarios autenticados)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    Route::get('/mis-reservas', function () {
        $reservas = DB::table('reservas')
            ->where('user_id', Auth::id())
            ->orderByDesc('created_at')
            ->get();
        $entregas = DB::table('entregas')
            ->whereIn('reserva_id', $reservas->pluck('id')->all())
            ->get()
            ->keyBy('reserva_id');
        return view('historial-reservas', [
            'reservas' => $reservas,
            'entregas' => $entregas,
        ]);
    })->name('mis-reservas');

    Route::get('/gestionar-vehiculos', fn () => view('gestionar-vehiculos'))
            ->name('gestionar-vehiculos');

    Route::get('/realizar-pago', fn () => view('realizar-pago'))
            ->name('realizar-pago');

    Route::post('/reservas', function (Request $request) {
        if (!Auth::check() || Auth::user()->role !== 'cliente') {
            abort(403);
        }

        $data = $request->validate([
            'vehiculo' => 'nullable|string',
            'duracion' => 'nullable|string',
            'precio' => 'nullable|integer',
            'nombre' => 'required|string',
            'email' => 'required|email',
            'telefono' => 'required|string',
            'tipo_doc' => 'required|string',
            'num_doc' => 'required|string',
            'fecha' => 'required|date',
            'hora' => 'required|string',
            'duracion_select' => 'nullable|string',
            'tipo' => 'nullable|string',
            'recogida' => 'required|string',
            'entrega' => 'required|string',
            'metodo' => 'required|string',
            'direccion' => 'nullable|string',
            'observaciones' => 'nullable|string',
            'accesorios' => 'array'
        ]);

        $prefixMap = [
            'monopatin' => 'MONO',
            'bicicleta' => 'BICI',
            'patineta' => 'PATIN',
        ];
        $tipoKey = strtolower((string)($data['tipo'] ?? ''));
        if (!$tipoKey) {
            $vehiculoSlug = (string)($data['vehiculo'] ?? '');
            if (str_starts_with($vehiculoSlug, 'ecoScoot')) {
                $tipoKey = 'monopatin';
            } elseif (str_starts_with($vehiculoSlug, 'ecoBike')) {
                $tipoKey = 'bicicleta';
            } elseif (str_starts_with($vehiculoSlug, 'ecoMoto')) {
                $tipoKey = 'patineta';
            }
        }
        $prefix = $prefixMap[$tipoKey] ?? 'GEN';
        do {
            $numero = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            $codigo = 'RV-'.$prefix.'-'.$numero;
        } while (DB::table('reservas')->where('numero_serie', $codigo)->exists());

        $id = DB::table('reservas')->insertGetId([
            'user_id' => Auth::id(),
            'vehiculo' => $data['vehiculo'] ?? null,
            'duracion' => $data['duracion'] ?? $data['duracion_select'] ?? null,
            'precio' => $data['precio'] ?? null,
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'tipo_doc' => $data['tipo_doc'],
            'num_doc' => $data['num_doc'],
            'numero_serie' => $codigo,
            'fecha' => $data['fecha'],
            'hora' => $data['hora'],
            'tipo' => $tipoKey,
            'recogida' => $data['recogida'],
            'entrega' => $data['entrega'],
            'metodo' => $data['metodo'],
            'direccion' => $data['direccion'] ?? null,
            'accesorios' => isset($data['accesorios']) ? json_encode($data['accesorios']) : null,
            'observaciones' => $data['observaciones'] ?? null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $qs = http_build_query([
            'vehiculo' => $data['vehiculo'] ?? null,
            'duracion' => $data['duracion'] ?? $data['duracion_select'] ?? null,
            'precio' => $data['precio'] ?? null,
            'reserva_id' => $id,
        ]);

        return redirect('/realizar-pago');
    })->name('reservas.store');

    Route::delete('/reservas/{id}', function (int $id) {
        if (!Auth::check()) {
            abort(403);
        }
        $exists = DB::table('reservas')
            ->where('id', $id)
            ->where('user_id', Auth::id())
            ->exists();
        if (! $exists) {
            abort(404);
        }
        DB::table('entregas')->where('reserva_id', $id)->delete();
        DB::table('reservas')->where('id', $id)->delete();
        return redirect()->route('mis-reservas');
    })->name('reservas.destroy');

});

/*
|--------------------------------------------------------------------------
| Zona ADMIN
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/historial-reservas', fn () => view('historial-reservas'));


    Route::get('/registrar-mantenimiento-completo', fn () => view('registrar-mantenimiento-completo'));

    Route::get('/reportar-incidencias', fn () => view('reportar-incidencias'));
});
