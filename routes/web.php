<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Inicio');
});
Route::get('/Conctactanos', function () {
    return view('prueba');
});
Route::get('/InicioSesion', function () {
    return view('iniciosesion');
});
Route::get('/Ofertas', function () {
    return view('ofertas');
});
Route::get('/reservas', function () {
    return view('reservas');
})->name('reservas'); // Aquí definimos el nombre de la ruta como 'reservas'

Route::get('/ReservasForm', function () {
    return view('reservasform');
})->name('reservasform');

Route::get('/Inicio', function () {
    return view('inicio');
});

Livewire::setUpdateRoute(function($handle) {
    return Route::post('/ReservaHoteles/public/livewire/update',$handle);
});