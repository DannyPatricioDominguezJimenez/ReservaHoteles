<?php

use Illuminate\Support\Facades\Route;
use Filament\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HabitacionesController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');
Route::get('/Conctactanos', function () {
    return view('contactanos');
});

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

Route::get('/registro', function () {
    return view('registro');
});

Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');


Route::post('/InicioSesion', [InicioSesionController::class, 'index'])->name('inicio.sesion');
Route::get('/Inicio', function () {
    return view('inicio');
});

// Ruta para mostrar el formulario
Route::get('/reservar', function () {
    return view('reservasform'); // Asegúrate de que esta vista exista
});

// Ruta para procesar el formulario
Route::post('/reservar', [ReservaController::class, 'store']);

// Ruta para la página de inicio
Route::get('/Inicio', function () {
    return view('inicio'); // Asegúrate de que esta vista exista
})->name('inicio');



Route::get('/reservas', [HabitacionesController::class, 'index'])->name('reservas');

Livewire::setUpdateRoute(function($handle) {
    return Route::post('/ReservaHoteles/public/livewire/update',$handle);
});