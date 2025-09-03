<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Tambahkan route untuk halaman home
Route::get('/home', function () {
    return view('home');
});
