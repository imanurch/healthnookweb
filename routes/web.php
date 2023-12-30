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
Route::get('/masker', [KategoriMaskerController::class, 'index']);
Route::get('/obat_dalam', [KategoriObatDalamController::class, 'index']);
Route::get('/alat_medis', [KategoriAlatMedisController::class, 'index']);
Route::get('/obat_luar', [KategoriObatLuarController::class, 'index']);

Route::get('/daftar.php', [DaftarController::class, 'index']);
Route::post('/daftar.php', [DaftarController::class, 'insert']);

Route::get('/masuk.php', [MasukController::class, 'index'])->middleware('guest');
Route::post('/masuk.php', [MasukController::class, 'authenticate']);

Route::get('/verifikasi.php', function () {
    return view('verifikasi');
});

Route::get('/admin.php', function () {
    return view('/admin/layout');
});

Route::get('/dashboard.php', [DashboardController::class, 'index']);

Route::get('/user.php', [UserController::class, 'index']);
Route::get('/tambah_user.php', [UserController::class, 'add']);
Route::get('/edit_user.php', [UserController::class, 'edit']);

Route::get('/product.php', [ProductController::class, 'index']);
Route::get('/tambah_product.php', [ProductController::class, 'add']);
Route::get('/edit_product.php', [ProductController::class, 'edit']);
