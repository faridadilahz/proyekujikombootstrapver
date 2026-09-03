<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritasController;
use App\Http\Controllers\GalerisController  ;
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

    Route::get('/admin/profil', function() {
        return view ('admin.profil');
    });
    Route::get('/admin/berita', [BeritasController::class, 'index'])->name('berita');

    Route::get('/admin/berita/posting-berita', [BeritasController::class, 'create'])->name('berita.posting');
    Route::post('/admin/berita', [BeritasController::class, 'store'])->name('berita.store');   
    Route::delete('admin/berita/{id}', [BeritasController::class, 'destroy'])->name('berita.destroy');

    Route::get('/admin/galeri', [GalerisController::class, 'index'])->name('galeri');
    Route::get('/admin/galeri/posting-galeri', [GalerisController::class, 'create'])->name('galeri.posting');
    Route::post('/admin/galeri', [GalerisController::class, 'store'])->name('galeri.store');   
    Route::delete('/admin/galeri/{id}', [GalerisController::class, 'destroy'])->name('galeri.destroy');
});
