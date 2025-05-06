<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Study Group</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Menambahkan Font Awesome untuk ikon mata -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="main-header">
        <h1>Study Group</h1>
        <p>
            Tempat yang tepat untuk belajar bersama dengan teman-teman!<br>
            Di sini, kamu bisa menemukan jadwal belajar, materi tambahan,<br>
            serta bergabung dalam diskusi seru sesuai mata pelajaran yang kamu pilih.
        </p>
    </div>

    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form id="loginForm" action="#" method="POST">
                @csrf
                <input type="text" name="username" id="username" placeholder="Username" required>
                <p id="username-warning" class="warning-text">Harap wajib diisi</p>

                <div class="password-container">
                    <input type="password" name="password" id="password" placeholder="Password" required minlength="8">
                    <i class="fas fa-eye" id="togglePassword" onclick="togglePassword()"></i>
                </div>
                <p id="password-warning" class="warning-text">Password harus lebih dari 8 karakter</p>
                <p id="password-required-warning" class="warning-text">Harap wajib diisi</p>

                <button type="submit" id="loginButton" disabled>Login</button>
            </form>
        </div>
        <div class="image-side">
            <img src="{{ asset('assets/img/2.png') }}" alt="Login Image">
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
