<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Inicio', function () {
    return view('inicio');
});

Route::get('/Room', function (){
    return view('room');
});