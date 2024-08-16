<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginsController;
use App\Http\Controllers\huespedesController;
use App\Http\Controllers\reservasAPIController;

Route::get('/logins', [loginsController::class, 'index']);

Route::get('/huespedes', [huespedesController::class, 'index']);

Route::get('/reservas', [reservasAPIController::class, 'index']);
