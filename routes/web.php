<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// Rute publik untuk halaman landing page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

// Grup rute admin yang dilindungi oleh middleware 'auth' dan 'admin'
Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
});