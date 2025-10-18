<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });
Route::resource('/', BukuController::class);
Route::resource('buku', BukuController::class);

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('layout.app');
    });
});