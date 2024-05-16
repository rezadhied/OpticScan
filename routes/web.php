<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\InputDataPasien;

Route::get('/', [DashboardController::class, 'index'])->name('dashboardDokter')->middleware('auth');

Route::resource('/profile', ProfilController::class)->names('profile')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/DataInput', [InputDataPasien::class, 'index'])->middleware('auth');
Route::resource('/datapasien', DataPasienController::class)->names('datapasien')->middleware('auth');
