<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('layout.app');
    });
    
    Route::get('/home', function () {
        return view('pages.home');
    });
    
    Route::resource('/', BukuController::class);
    Route::resource('buku', BukuController::class);
});

Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');