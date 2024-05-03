<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InputDataPasien;
use App\Http\Controllers\DataPasienController;


Route::get('/', [DashboardController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/DataInput', [InputDataPasien::class, 'index']);
Route::get('/datapasien', [DataPasienController::class, 'index']);