<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritasController;
use App\Http\Controllers\GalerisController;
use App\Http\Controllers\AuthController;

Route::get('/beranda', function () {
    return view('guest.beranda');
});

Route::get('/berita', function () {
    return view('guest.berita');
});

Route::get('/galeri', function () {
    return view('guest.galeri');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dasbor', function() {
        return view ('admin.dasbor');
    });
});
