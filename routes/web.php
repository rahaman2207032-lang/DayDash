<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('/auth/register', function () {
    return view('auth.register');
});

Route::post('/login', LoginController::class)->name('login.store');
Route::post('/register', RegisterController::class)->name('register.store');

Route::get('/dashboard', function () {
    return view('dashboard');
});