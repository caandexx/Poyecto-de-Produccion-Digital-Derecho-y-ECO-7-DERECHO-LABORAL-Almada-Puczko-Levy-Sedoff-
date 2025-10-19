<?php

use Illuminate\Support\Facades\Route;

// Rutas con nombres definidos
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/contenido', function () {
    return view('pages.contenido');
})->name('contenido');

Route::get('/contacto', function () {
    return view('pages.contacto');
})->name('contacto');

// Ruta de prueba simple
Route::get('/test-simple', function () {
    return "
    <h1>✅ ¡Rutas funcionando!</h1>
    <p>Ahora probá:</p>
    <ul>
        <li><a href='/'>Home</a></li>
        <li><a href='/contenido'>Contenido</a></li>
        <li><a href='/contacto'>Contacto</a></li>
    </ul>
    ";
});