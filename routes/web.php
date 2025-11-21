<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articulos', function () {
    return view('articulos');
});

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

Route::get('/realizar-pago', function () {
    return view('realizar-pago');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/historial-reservas', function () {
    return view('historial-reservas');
});

Route::get('/gestionar-vehiculos', function () {
    return view('gestionar-vehiculos');
});

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
