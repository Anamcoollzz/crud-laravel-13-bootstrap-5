<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Login routes
use App\Http\Controllers\UserController;

Route::get('/login', [UserController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'processLogin'])->middleware('guest')->name('login.process');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
