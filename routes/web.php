<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\DashboardBarangController;
use App\Http\Controllers\TransaksiSuplierController;


Route::get('/', function () {
    return view('frontend.index', [
        "title" => "Home"
    ]);
});
Route::get('/contact', function () {
    return view('frontend.contact', [
        "title" => "Contact"
    ]);
});
Route::get('/about', function () {
    return view('frontend.about', [
        "title" => "About"
    ]);
});

// login logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register admin
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// register user
Route::get('/registerUser', [RegisterUserController::class, 'index'])->middleware('guest');
Route::post('/registerUser', [RegisterUserController::class, 'store']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth', 'ceklevel:admin');

//dashboard barang belum selesai
Route::resource('/dashboard/barang', DashboardBarangController::class)->middleware('auth', 'ceklevel:admin');

// dashboard transaksi suplier
Route::resource('/dashboard/transaksi-suplier', TransaksiSuplierController::class)->middleware('auth', 'ceklevel:admin');

// dashboard kategori
Route::resource('/dashboard/category', CategoryController::class)->middleware('auth', 'ceklevel:admin');


// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware('auth', 'ceklevel:admin');