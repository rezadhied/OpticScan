<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;


Route::get('/', [DashboardController::class, 'index'])->name('dashboardDokter');
Route::resource('/profile',ProfilController::class)->names('profile');
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');