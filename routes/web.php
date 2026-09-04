<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritasController;
use App\Http\Controllers\GalerisController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandasController;
use App\Http\Controllers\KontakController;
use App\Models\Berandas;
use App\Models\Beritas;

Route::get('/beranda', [BerandasController::class, 'showBeranda'])->name('guest.beranda');

Route::get('/berita', [BerandasController::class, 'berita'])->name('guest.berita');
Route::get('/berita/{id}', [BerandasController::class, 'showBerita'])->name('guest.detailberita');

Route::get('/galeri', [BerandasController::class, 'galeri'])->name('guest.galeri');
Route::get('/galeri/{id}', [BerandasController::class, 'showGaleri'])->name('guest.detailgaleri');

Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dasbor', [AdminController::class, 'index'])->name('admin.dasbor');

    Route::get('/admin/profil', function() {
        return view ('admin.profil');
    });
    
    Route::get('/admin/berita', [BeritasController::class, 'index'])->name('berita');
    Route::get('/admin/berita/posting-berita', [BeritasController::class, 'create'])->name('berita.posting');
    Route::post('/admin/berita', [BeritasController::class, 'store'])->name('berita.store');
    Route::get('/admin/berita/{id}', [BeritasController::class, 'show'])->name('berita.show');

    Route::get('/admin/berita/{id}/edit-berita', [BeritasController::class, 'edit'])->name('berita.edit');
    Route::put('/admin/berita/{id}', [BeritasController::class, 'update'])->name('berita.update');
    Route::delete('/admin/berita/{id}', [BeritasController::class, 'destroy'])->name('berita.destroy');

    Route::get('/admin/galeri', [GalerisController::class, 'index'])->name('galeri');
    Route::get('/admin/galeri/posting-galeri', [GalerisController::class, 'create'])->name('galeri.posting');
    Route::post('/admin/galeri', [GalerisController::class, 'store'])->name('galeri.store'); 
    Route::get('/admin/galeri/{id}', [GalerisController::class, 'show'])->name('galeri.show'); 

    Route::get('/admin/galeri/{id}/edit-galeri', [GalerisController::class, 'edit'])->name('galeri.edit');
    Route::put('/admin/galeri/{id}', [GalerisController::class, 'update'])->name('galeri.update');
    Route::delete('/admin/galeri/{id}', [GalerisController::class, 'destroy'])->name('galeri.destroy');
});
