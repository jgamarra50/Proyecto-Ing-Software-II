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
        if (!Auth::check() || !Auth::user()->hasRole('user')) {
            abort(403);
        }

        $data = $request->validate([
            'vehiculo' => 'nullable|string',
            'duracion' => 'nullable|string',
            'precio' => 'nullable|integer',
            'telefono' => 'required|string',
            'tipo_doc' => 'required|string',
            'num_doc' => 'required|string',
            'fecha' => 'required|date',
            'hora' => 'required|string',
            'duracion_select' => 'nullable|string',
            'tipo' => 'nullable|string',
            'recogida' => 'required|string',
            'entrega' => 'nullable|string',
            'metodo' => 'required|string',
            'sede' => 'nullable|string',
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
            'nombre' => Auth::user()->name,
            'email' => Auth::user()->email,
            'telefono' => $data['telefono'],
            'tipo_doc' => $data['tipo_doc'],
            'num_doc' => $data['num_doc'],
            'numero_serie' => $codigo,
            'fecha' => $data['fecha'],
            'hora' => $data['hora'],
            'tipo' => $tipoKey,
            'recogida' => $data['recogida'],
            'entrega' => $data['entrega'] ?? null,
            'metodo' => $data['metodo'],
            'sede' => $data['sede'] ?? null,
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

        return redirect('/realizar-pago?'.$qs);
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

    Route::get('/admin/dashboard', function () {
        $totalUsuarios = DB::table('users')->count();
        $usuariosMesPasado = DB::table('users')
            ->whereBetween('created_at', [now()->subMonth()->startOfMonth(), now()->subMonth()->endOfMonth()])
            ->count();
        $crecimientoUsuarios = $usuariosMesPasado ? '+' . number_format((($totalUsuarios - $usuariosMesPasado) / max(1,$usuariosMesPasado)) * 100, 1) . '%' : '+0%';

        $ingresosMes = (int) DB::table('reservas')
            ->whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])
            ->sum('precio');

        $ordenesPendientes = DB::table('reservas')
            ->leftJoin('entregas', 'reservas.id', '=', 'entregas.reserva_id')
            ->whereNull('entregas.id')
            ->count();

        $productosActivos = DB::table('reservas')
            ->whereNotNull('vehiculo')
            ->distinct('vehiculo')
            ->count('vehiculo');

        $desde = now()->subMonths(5)->startOfMonth();
        $ventas = DB::table('reservas')
            ->select('id', 'precio', 'created_at')
            ->where('created_at', '>=', $desde)
            ->get();
        $ventasPorMes = [];
        foreach (range(0,5) as $i) {
            $m = now()->subMonths(5 - $i)->format('Y-m');
            $ventasPorMes[$m] = 0;
        }
        foreach ($ventas as $v) {
            $key = \Carbon\Carbon::parse($v->created_at)->format('Y-m');
            if (isset($ventasPorMes[$key])) {
                $ventasPorMes[$key] += (int)($v->precio ?? 0);
            }
        }
        $ventasLabels = array_keys($ventasPorMes);
        $ventasValues = array_values($ventasPorMes);
        $miniSerie = $ventasValues;

        $productos = DB::table('reservas')
            ->select('vehiculo', DB::raw('COUNT(*) as c'))
            ->whereNotNull('vehiculo')
            ->groupBy('vehiculo')
            ->orderByDesc('c')
            ->limit(5)
            ->get();
        $productosLabels = $productos->pluck('vehiculo')->all();
        $productosValues = $productos->pluck('c')->map(fn($x)=> (int)$x)->all();

        $roles = DB::table('users')
            ->select('role', DB::raw('COUNT(*) as c'))
            ->groupBy('role')
            ->get();
        $rolesLabels = $roles->pluck('role')->map(fn($r)=> $r ?: 'sin_rol')->all();
        $rolesValues = $roles->pluck('c')->map(fn($x)=> (int)$x)->all();

        $transacciones = DB::table('reservas')
            ->orderByDesc('created_at')
            ->limit(10)
            ->get()
            ->map(function ($r) {
                $ent = DB::table('entregas')->where('reserva_id', $r->id)->exists();
                $r->estado = $ent ? 'Completada' : 'Pendiente';
                return $r;
            });

        $usuariosRecientes = DB::table('users')
            ->orderByDesc('created_at')
            ->limit(6)
            ->get();

        $eventos = DB::table('reservas')
            ->select('fecha')
            ->where('fecha', '>=', now()->startOfMonth()->toDateString())
            ->where('fecha', '<=', now()->endOfMonth()->toDateString())
            ->orderBy('fecha')
            ->limit(20)
            ->pluck('fecha')
            ->map(fn($d)=> (string)$d)
            ->all();

        $actividad = [];
        foreach ($transacciones as $t) {
            $actividad[] = ['texto' => 'Reserva #' . $t->id . ' creada', 'fecha' => \Carbon\Carbon::parse($t->created_at)->diffForHumans()];
        }

        return view('dashboard-admin', compact(
            'totalUsuarios','crecimientoUsuarios','ingresosMes','ordenesPendientes','productosActivos',
            'ventasLabels','ventasValues','miniSerie','productosLabels','productosValues',
            'rolesLabels','rolesValues','transacciones','usuariosRecientes','eventos','actividad'
        ));
    });
});
