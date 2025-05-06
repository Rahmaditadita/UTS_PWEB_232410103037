@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="container py-4">
    <div class="profile-card shadow-sm">
        <div class="profile-header">
            <h2><i class="fas fa-user-circle"></i> Profil Pengguna</h2>
        </div>
        <div class="profile-body">
            <div class="welcome-message">
                <h3>Selamat datang, <span class="username">{{ $username }}</span>!</h3>
                <p>Ini adalah halaman profil Anda.</p>
            </div>

            <div class="profile-actions mt-4">
                <a href="{{ route('dashboard', ['username' => $username]) }}" class="btn btn-primary">
                    <i class="fas fa-tachometer-alt"></i> Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
