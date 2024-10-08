<?php

use App\Http\Controllers\HuespedesPDFController;
use App\Http\Controllers\MesesPDFController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;
use Filament\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\YouTubeController;
use App\Http\Controllers\WeatherController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');
Route::get('/Conctactanos', [WeatherController::class, 'index'])->name('prueba');


Route::get('/InicioSesion', function () {
    return view('iniciosesion');
});
Route::get('/Ofertas', [YouTubeController::class, 'showVideos'])->name('ofertas');

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



Route::get('/InicioSesion', [InicioSesionController::class, 'showLoginForm'])->name('inicio.sesion');
Route::post('/InicioSesion', [InicioSesionController::class, 'authenticate'])->name('inicio.authenticate');
Route::get('/Inicio', function () {
    return view('inicio'); // Asegúrate de tener una vista 'inicio.blade.php'
})->name('inicio');



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

Route::get('/', [ServiciosController::class, 'index'])->name('inicio');
// Ruta adicional para /inicio si es necesario
Route::get('/inicio', [ServiciosController::class, 'index'])->name('inicio');

Livewire::setUpdateRoute(function($handle) {
    return Route::post('/ReservaHoteles/public/livewire/update', $handle);
});

Route::get('download', [PDFController::class, 'downloadpdf'])->name('download.tes');

Route::get('download-huespedes-pdf', [HuespedesPDFController::class, 'downloadpdf'])
    ->name('download.huespedes.pdf');

//Route::get('download-meses', [MesesPDFController::class, 'downloadpdf'])->name('download.meses');
  
Route::get('download/meses', [MesesPDFController::class, 'downloadpdf'])->name('download.meses');
