<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, "index"]);

Route::get('/login', [AuthController::class, "login"]);
Route::post('/auth', [AuthController::class, "auth"]);
Route::get('/logout', [AuthController::class, "logout"]);


Route::prefix('/transaksi')->group(function () {
    Route::get('/setoran', [TransaksiController::class, 'setoran']);
    Route::get('/penarikan', [TransaksiController::class, 'penarikan']);
    Route::get('/penarikan/konfirmasi', [TransaksiController::class, 'penarikan_konfirmasi']);
    Route::get('/setoran/tambah', [TransaksiController::class, 'setoran_tambah']);
    Route::get('/penarikan/tambah', [TransaksiController::class, 'penarikan_tambah']);
});

Route::prefix('/user')->group(function () {
    Route::get('/profil', [UserController::class, "profil"]);
    Route::get('/nasabah', [UserController::class, "nasabah"]);
    Route::get('/nasabah/tambah', [UserController::class, "nasabah_tambah"]);
    Route::get('/nasabah/edit', [UserController::class, "nasabah_edit"]);
    Route::get('/nasabah/detail', [UserController::class, "nasabah_detail"]);
    Route::get('/admin', [UserController::class, "admin"]);
    Route::get('/admin/tambah', [UserController::class, "admin_tambah"]);
    Route::get('/admin/edit', [UserController::class, "admin_edit"]);
});

Route::prefix('/jenis')->group(function () {
    Route::get('/', [JenisController::class, "index"]);
    Route::get('/tambah', [JenisController::class, "jenis_tambah"]);
    Route::get('/edit', [JenisController::class, "jenis_edit"]);
});

Route::prefix('/laporan')->group(function () {
    Route::get('/', [LaporanController::class, "index"]);
});
