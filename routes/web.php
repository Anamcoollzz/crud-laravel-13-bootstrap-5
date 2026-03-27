<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Login routes
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;

Route::get('/login', [UserController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'processLogin'])->middleware('guest')->name('login.process');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::resource('/mahasiswa', MahasiswaController::class)->middleware('auth');
Route::resource('/kelas', KelasController::class)->middleware('auth');
