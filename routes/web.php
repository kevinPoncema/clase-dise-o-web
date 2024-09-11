<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\loginCtr;
use App\Http\Controllers\userCtrl;


Route::get('/', function () {
    return view('welcome');
});

// Ruta para el login
Route::get('login', [loginCtr::class, 'loginView']);

// Ruta para el registrar
Route::get('registrarse', [userCtrl::class, 'registerView']);

