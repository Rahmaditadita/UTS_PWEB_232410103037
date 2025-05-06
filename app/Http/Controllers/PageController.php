<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    // Menampilkan halaman landing
    public function landing()
    {
        return view('landing');
    }

    // Menampilkan halaman login
    public function login()
    {
        return view('login'); // pastikan sudah ada file login.blade.php
    }

    // Proses login
    public function loginSubmit(Request $request)
    {
        // Validasi input
        $credentials = $request->only('username', 'password');

        // Cek kredensial pengguna
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, alihkan ke halaman dashboard
            return redirect()->intended('/dashboard');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return redirect('/login')->withErrors(['login' => 'Invalid credentials']);
    }



    // Menampilkan halaman dashboard
    public function dashboard()
    {
        return view('dashboard');
    }

    // Menampilkan halaman profile
    public function profile()
    {
        return view('profile');
    }

    // Menampilkan halaman pengelolaan
    public function pengelolaan()
    {
        return view('pengelolaan');
    }
}
