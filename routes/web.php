<?php

use App\Http\Controllers\PageController;

// Halaman landing
Route::get('/landing', [PageController::class, 'landing']);

// Halaman login
Route::get('/login', [PageController::class, 'login'])->name('login'); // Memberikan nama pada route login

// Proses login
Route::post('/login', [PageController::class, 'loginSubmit']);

// Halaman dashboard (hanya bisa diakses jika sudah login)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard']);
    Route::get('/profile', [PageController::class, 'profile']);
    Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);
});
