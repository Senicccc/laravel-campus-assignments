<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     $data = "Selamat Datang di Halaman Home";
//     $angka = 5;
//     return view('home', compact('data', 'angka'));
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', [HomeController::class, 'home']);
Route::get('/buku', [BukuController::class, 'index']);
