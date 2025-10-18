<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('home');
// });

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('layout.app');
    });
    
    Route::get('/home', [App\Http\Controllers\BukuController::class, 'index'])->name('home');
    
    Route::resource('/', BukuController::class);
    Route::resource('buku', BukuController::class);
});

Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.post');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', [UserController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.post');