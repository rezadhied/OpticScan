<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\InputDataPasien;
use App\Http\Controllers\KelolaPenggunaController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboardDokter')->middleware('auth');

Route::resource('/profile', ProfilController::class)->names('profile')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/DataInput', [InputDataPasien::class, 'index'])->middleware('auth');
Route::resource('/datapasien', DataPasienController::class)->names('datapasien')->middleware('auth');

Route::resource('/kelolapengguna', KelolaPenggunaController::class)->names('kelolaPengguna')->middleware('auth');

Route::post('/storePatient', [DataPasienController::class, 'storePatient'])->name('patient.store');

//Route::get('/patients', [DataPasienController::class, 'index'])->name('patient.index');
Route::get('/patients/create', [DataPasienController::class, 'create'])->name('patient.create');

Route::get('/patients/diagnose-all', [DiagnosisController::class, 'diagnoseExistingPatients'])->name('patients.diagnose-all');
