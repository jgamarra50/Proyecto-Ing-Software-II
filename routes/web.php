<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Rutas Públicas y Generales
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rutas de Artículos
Route::get('/articulos', function () { return view('articulos'); });
Route::get('/articulos/eco-moto-standard', function () { return view('articulos.detalle-ecoMoto-standard'); });
Route::get('/articulos/eco-moto-pro', function () { return view('articulos.detalle-ecoMoto-pro'); });
Route::get('/articulos/eco-scoot-max', function () { return view('articulos.detalle-ecoScoot-max'); });
Route::get('/articulos/eco-scoot-lite', function () { return view('articulos.detalle-ecoScoot-lite'); });
Route::get('/articulos/ecobike-one', function () { return view('articulos.detalle-ecoBike-one'); });

// Ruta de Imágenes
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

// Rutas de Funcionalidades
Route::get('/gestionar-vehiculos', function () {
    return view('gestionar-vehiculos');
})->name('gestionar-vehiculos');

Route::get('/realizar-pago', function () {
    return view('realizar-pago');
});

Route::get('/historial-reservas', function () {
    return view('historial-reservas');
});

/*
|--------------------------------------------------------------------------
| Rutas de Autenticación (Login, Register, Logout)
|--------------------------------------------------------------------------
*/
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

/*
|--------------------------------------------------------------------------
| Rutas Protegidas (Rol: Repartidor)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:repartidor'])->group(function () {
    
    Route::get('/elegir-metodo-entrega', function () {
        return view('elegir-metodo-entrega');
    });

    Route::get('/registrar-entrega-vehiculo', function () {
        return view('registrar-entrega-de-vehiculo');
    });

    Route::get('/estado-vehiculo', function () {
        return view('estado-vehiculo');
    });

    Route::get('/registrar-mantenimiento-completo', function () {
        return view('registrar-mantenimiento-completo');
    });

    Route::get('/reportar-incidencias', function () {
        return view('reportar-incidencias');
    });
});