<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SupervisorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::middleware(['is_admin'])->group(function () { 
    Route::resource('admin/karyawan', KaryawanController::class);
    Route::resource('admin/dashboard', AdminController::class);
    Route::resource('admin/absen', AbsenController::class);
    Route::get('admin/slip', [GajiController::class, 'slip'])->name('admin.slip');
});
Route::middleware(['is_user'])->group(function () {
    Route::get('user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('user/slip', [GajiController::class, 'user_slip'])->name('user.slip');
    Route::get('user/karyawan', [KaryawanController::class, 'user'])->name('user.karyawan');
});
Route::middleware(['is_manager'])->group(function () {
    Route::get('manager/karyawan', [KaryawanController::class, 'manager'])->name('manager.karyawan');
    Route::get('manager/dashboard', [ManagerController::class, 'index'])->name('manager.dashboard');
    Route::get('manager/gaji', [GajiController::class, 'manager'])->name('manager.gaji');
    Route::get('manager/absen', [AbsenController::class, 'manager'])->name('manager.absen');
});
Route::middleware(['is_supervisor'])->group(function () {
    Route::get('supervisor/karyawan', [KaryawanController::class, 'supervisor'])->name('supervisor.karyawan');
    Route::get('supervisor/dashboard', [SupervisorController::class, 'index'])->name('supervisor.dashboard');
    Route::resource('supervisor/gaji', GajiController::class);
    Route::get('supervisor/absen', [AbsenController::class, 'supervisor'])->name('supervisor.absen');
    Route::get('supervisor/slip', [GajiController::class, 'slip_supervisor'])->name('supervisor.slip');
});
Route::post('/slip/cetak_pdf', [GajiController::class, 'cetak_slip'])->name('Cetak_PDF_slip');
Route::get('/gaji/cetak_pdf', [GajiController::class, 'cetak_pdf'])->name('Cetak_PDF_gaji');
Route::get('/absen/cetak_pdf', [AbsenController::class, 'cetak_pdf'])->name('Cetak_PDF_absen');
Route::get('/karyawan/cetak_pdf', [KaryawanController::class, 'cetak_pdf'])->name('Cetak_PDF_karyawan');
Route::get('', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index'])->name('home');
