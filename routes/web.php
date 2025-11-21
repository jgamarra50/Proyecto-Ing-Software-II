<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/realizar-pago', fn () => view('realizar-pago'));
Route::get('/elegir-metodo-entrega', fn () => view('elegir-metodo-entrega'));
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
        return view('historial-reservas');
    })->name('mis-reservas');

});

/*
|--------------------------------------------------------------------------
| Zona ADMIN
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/historial-reservas', fn () => view('historial-reservas'));

    Route::get('/gestionar-vehiculos', fn () => view('gestionar-vehiculos'))
            ->name('gestionar-vehiculos');

    Route::get('/registrar-mantenimiento-completo', fn () => view('registrar-mantenimiento-completo'));

    Route::get('/reportar-incidencias', fn () => view('reportar-incidencias'));
});
