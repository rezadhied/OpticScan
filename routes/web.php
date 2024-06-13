<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPasienController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfilePasienController;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\DetailPenyakitController;
use App\Http\Controllers\InfoPenyakitController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\DetailPenyakitControllerController;
use App\Http\Controllers\InputDataPasien;
use App\Http\Controllers\KelolaPenggunaController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboardDokter')->middleware('auth');

Route::get('/', [DashboardPasienController::class, 'index'])->name('dashboardpasien')->middleware('auth');

Route::resource('/profile', ProfilController::class)->names('profile')->middleware('auth');

Route::resource('/profilepasien', ProfilePasienController::class)->names('profilepasien');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/infopenyakit', [InfoPenyakitController::class, 'index'])->name('infopenyakit');

Route::get('/tkami', [TentangKamiController::class, 'index'])->name('tkami');

Route::get('/detailpenyakit', [DetailPenyakitController::class, 'index'])->name('detailpenyakit');

Route::get('/DataInput', [InputDataPasien::class, 'index'])->middleware('auth');
Route::resource('/datapasien', DataPasienController::class)->names('datapasien')->middleware('auth');

Route::resource('/kelolapengguna', KelolaPenggunaController::class)->names('kelolaPengguna')->middleware('auth');
