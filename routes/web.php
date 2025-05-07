<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/', [PageController::class, 'beranda'])->name('home');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
Route::get('/logout-simple', function() {
    Auth::logout();
    return redirect()->route('login');
})->name('simple-logout');
