<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritasController;
use App\Http\Controllers\GalerisController;
use App\Http\Controllers\AuthController;
use App\Models\Beritas;

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
    Route::get('/admin/dasbor', [AdminController::class, 'index'])->name('admin.dasbor');

    Route::get('/admin/profil', function() {
        return view ('admin.profil');
    });
    
    Route::get('/admin/berita', [BeritasController::class, 'index'])->name('berita');
    Route::get('/admin/berita/posting-berita', [BeritasController::class, 'create'])->name('berita.posting');
    Route::post('/admin/berita', [BeritasController::class, 'store'])->name('berita.store');

    Route::get('/admin/berita/{id}/edit-berita', [BeritasController::class, 'edit'])->name('berita.edit');
    Route::put('/admin/berita/{id}', [BeritasController::class, 'update'])->name('berita.update');
    Route::delete('/admin/berita/{id}', [BeritasController::class, 'destroy'])->name('berita.destroy');

    Route::get('/admin/galeri', [GalerisController::class, 'index'])->name('galeri');
    Route::get('/admin/galeri/posting-galeri', [GalerisController::class, 'create'])->name('galeri.posting');
    Route::post('/admin/galeri', [GalerisController::class, 'store'])->name('galeri.store'); 

    Route::get('/admin/galeri/{id}/edit-galeri', [GalerisController::class, 'edit'])->name('galeri.edit');
    Route::put('/admin/galeri/{id}', [GalerisController::class, 'update'])->name('galeri.update');
    Route::delete('/admin/galeri/{id}', [GalerisController::class, 'destroy'])->name('galeri.destroy');
});
