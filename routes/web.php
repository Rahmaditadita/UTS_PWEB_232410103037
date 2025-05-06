<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;

Route::get('/landing', [PageController::class, 'landing'])->name('landing');
Route::get('/login', [PageController::class, 'login'])->name('login');

// Tidak ada post login
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// Route untuk mengubah password
Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

// Route untuk logout (gunakan POST untuk logout)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


