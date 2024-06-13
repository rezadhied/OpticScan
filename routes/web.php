<?php
use App\Http\Controllers\EditPenggunaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPasienController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfilePasienController;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\InputDataPasien;
use App\Http\Controllers\KelolaPenggunaController;
use App\Http\Controllers\DetailPenyakitController;
use App\Http\Controllers\InfoPenyakitController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\DetailPenyakitControllerController;
use App\Http\Controllers\AdminController;

Route::get('/dokter-home', [DashboardController::class, 'index'])->name('dashboardDokter')->middleware('auth');

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

Route::resource('/admin', AdminController::class)->names('admin')->middleware('auth');

Route::resource('/kelolapengguna', KelolaPenggunaController::class)->names('kelolaPengguna')->middleware('auth');

Route::resource('/editPengguna', EditPenggunaController::class)->names('editPengguna')->middleware('auth');

Route::post('/storePatient', [DataPasienController::class, 'storePatient'])->name('patient.store');

//Route::get('/patients', [DataPasienController::class, 'index'])->name('patient.index');
Route::get('/patients/create', [DataPasienController::class, 'create'])->name('patient.create');

Route::get('/patients/diagnose-all', [DiagnosisController::class, 'diagnoseExistingPatients'])->name('patients.diagnose-all');