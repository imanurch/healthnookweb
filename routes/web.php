<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\KategoriMaskerController;
use App\Http\Controllers\KategoriObatDalamController;
use App\Http\Controllers\KategoriAlatMedisController;
use App\Http\Controllers\KategoriObatLuarController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [IndexController::class, 'index']);
// Route::get('/katalog', [IndexController::class, 'index']);
Route::get('/masker', [IndexController::class, 'masker']);
Route::get('/obat_dalam', [IndexController::class, 'obat_dalam']);
Route::get('/alat_medis', [IndexController::class, 'alat_medis']);
Route::get('/obat_luar', [IndexController::class, 'obat_luar']);

Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/daftar', [DaftarController::class, 'insert']);

Route::get('/masuk', [MasukController::class, 'index'])->middleware('guest');
Route::post('/masuk', [MasukController::class, 'authenticate']);

Route::get('/verifikasi', function () {
    return view('verifikasi');
});

Route::get('/admin', function () {
    return view('/admin/layout');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/{id_user}', [UserController::class, 'destroy']);
// Route::post('/user/{id_user}', [UserController::class, 'destroy']);
Route::get('/tambah_user', [UserController::class, 'add']);
Route::post('/tambah_user', [UserController::class, 'insert']);
Route::get('/edit_user/{id_user}', [UserController::class, 'edit']);
Route::put('/edit_user/{id_user}', [UserController::class, 'update']);
Route::put('/verif_akun/{id_user}', [UserController::class, 'verif']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/tambah_product', [ProductController::class, 'add']);
Route::post('/tambah_product', [ProductController::class, 'insert']);
Route::get('/edit_product/{id_product}', [ProductController::class, 'edit']);
Route::put('/edit_product/{id_product}', [ProductController::class, 'update']);
