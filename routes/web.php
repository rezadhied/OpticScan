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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfilController::class, 'index'])->name('profile.index');
    Route::put('/profile', [ProfilController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/change_password', [ProfilController::class, 'changePassword'])->name('profile.change_password');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function () {
    Route::get('/infopenyakit', [InfoPenyakitController::class, 'index'])->name('infopenyakit');
    Route::get('/infopenyakit/{id}', [InfoPenyakitController::class, 'show'])->name('infopenyakit.show');
    Route::get('/detailpenyakit', [DetailPenyakitController::class, 'index'])->name('detailpenyakit');
    Route::put('/report/{id}/update', [DataPasienController::class, 'update'])->name('report.update');
    Route::put('/report/{id}/verify', [DataPasienController::class, 'verify'])->name('report.verify');
});

Route::get('/tkami', [TentangKamiController::class, 'index'])->name('tkami')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::post('/storePatient', [DataPasienController::class, 'storePatient'])->name('patient.store');
    Route::get('/patients/create', [DataPasienController::class, 'create'])->name('patient.create');
    Route::get('/patients/diagnose-all', [DiagnosisController::class, 'diagnoseExistingPatients'])->name('patients.diagnose-all');
    Route::get('/DataInput', [InputDataPasien::class, 'index'])->middleware('auth');
    Route::resource('/datapasien', DataPasienController::class)->names('datapasien')->middleware('auth');
    Route::get('/datapasien/{id}', [DataPasienController::class, 'show'])->name('datapasien.show');
});

Route::resource('/admin', AdminController::class)->names('admin')->middleware('auth');
Route::resource('/formPengguna', KelolaPenggunaController::class)->names('formPengguna')->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/pengguna', [AdminController::class, 'index'])->name('pengguna.index');
    Route::get('/pengguna/create', [AdminController::class, 'create'])->name('pengguna.create');
    Route::post('/pengguna', [AdminController::class, 'store'])->name('pengguna.store');
    Route::get('/pengguna/{id}/edit', [AdminController::class, 'edit'])->name('pengguna.edit');
    Route::put('/pengguna/{id}', [AdminController::class, 'update'])->name('pengguna.update');
    Route::delete('/pengguna/{id}', [AdminController::class, 'destroy'])->name('pengguna.destroy');
});


Route::resource('/editPengguna', EditPenggunaController::class)->names('editPengguna')->middleware('auth');
