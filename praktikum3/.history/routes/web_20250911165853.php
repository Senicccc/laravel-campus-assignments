<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\Buku1Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

// Route::get('/home', function () {
//     $data = "Selamat Datang di Halaman Home";
//     $angka = 5;
//     return view('home', compact('data', 'angka'));
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/home1', function () {
    return view('home1');
});

Route::get('/buku1', [Buku1Controller::class, 'index' ]);
Route::get('/tambah', [Buku1Controller::class, 'index' ]);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);