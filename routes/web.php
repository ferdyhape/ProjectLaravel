<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardBarangController;
use App\Http\Controllers\TransaksiSuplierController;
use App\Http\Controllers\UserControlller;
use App\Models\Barang;

// login logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/registerAdmin', [RegisterController::class, 'registerAdmin'])->middleware('guest');
Route::get('/registerUser', [RegisterController::class, 'registerUser'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/u', UserControlller::class)->middleware('auth');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth', 'ceklevel:admin');

//dashboard barang
Route::resource('/dashboard/barang', DashboardBarangController::class)->middleware('auth', 'ceklevel:admin');

// dashboard transaksi suplier
Route::resource('/dashboard/transaksi-suplier', TransaksiSuplierController::class)->middleware('auth', 'ceklevel:admin');

// dashboard kategori
Route::resource('/dashboard/category', CategoryController::class)->middleware('auth', 'ceklevel:admin');

Route::get('/', function () {
    return view('frontend.index', [
        'title' => 'Beranda',
    ]);
});

Route::get('/tentang-kami', function () {
    return view('frontend.tentang-kami', [
        'title' => 'Tentang Kami'
    ]);
});

Route::get('/katalog-produk', function () {
    return view('frontend.katalog-produk', [
        'title' => 'Katalog Produk',
        'barang' => Barang::all(),
    ]);
});

Route::get('/member-card', [LoginController::class, 'membercard'])->middleware('auth');
Route::get('/member-card/cetak', [LoginController::class, 'cetakMemberCard'])->middleware('auth');

// cetak tabel barang
Route::get('/dashboard/cetak-barang', [CetakController::class, 'cetakTabelBarang'])->middleware('auth', 'ceklevel:admin');
Route::get('/dashboard/cetak-category', [CetakController::class, 'cetakTabelCategory'])->middleware('auth', 'ceklevel:admin');
Route::get('/dashboard/cetak-transaksi', [CetakController::class, 'cetakTabelTransaksi'])->middleware('auth', 'ceklevel:admin');
