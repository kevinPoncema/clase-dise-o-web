<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\loginCtr;
use App\Http\Controllers\registro\registerController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para el login
Route::get('login', [loginCtr::class, 'loginView']);

// Ruta para el registro
Route::get('registrarse', [registerController::class, 'registerView']);

