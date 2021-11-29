<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterUserController;


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
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/registerUser', [RegisterUserController::class, 'index'])->middleware('guest');
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth', 'ceklevel:admin');


Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/registerUser', [RegisterUserController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);
