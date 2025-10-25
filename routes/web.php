<?php

use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Página de contenido jurídico
Route::get('/contenido', function () {
    return view('pages.contenido');
})->name('contenido');

// Página del ASISTENTE VIRTUAL (chatbot mejorado)
Route::get('/chatbot', function () {
    return view('pages.chatbot');
})->name('chatbot');

// Página de CONTACTO DIRECTO (solo formulario)
Route::get('/contacto', function () {
    return view('pages.contacto');
})->name('contacto');

// Ruta para procesar el formulario de contacto
Route::post('/contacto/enviar', function () {
    return redirect()->route('contacto')->with('success', 'Consulta enviada correctamente');
})->name('contacto.enviar');