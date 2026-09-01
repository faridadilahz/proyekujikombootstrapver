<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritasController;
use App\Http\Controllers\GalerisController;

Route::get('/beranda', function () {
    return view('guest.beranda');
});

Route::get('/berita', function () {
    return view('guest.berita');
});

Route::get('/galeri', function () {
    return view('guest.galeri');
});
