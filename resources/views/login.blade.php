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
            <form action="#" method="POST">
                @csrf
                <input type="text" name="username" placeholder="Username" required id="username">

                <!-- Password input dengan ikon mata -->
                <div class="password-container">
                    <input type="password" name="password" placeholder="Password" required id="password">
                    <i class="fas fa-eye" id="togglePassword" onclick="togglePassword()"></i>
                </div>

                <button type="submit" id="loginButton" disabled>Login</button>
            </form>
        </div>
        <div class="image-side">
            <img src="{{ asset('assets/img/2.png') }}" alt="Login Image">
        </div>
    </div>

    <!-- Memanggil file JavaScript -->
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
