<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });
Route::resource('/', BukuController::class);
Route::resource('buku', BukuController::class);

route::middleware('auth')