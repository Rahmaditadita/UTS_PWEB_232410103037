<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Group Navbar</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">
            <a href="/" class="navbar-brand">Study Group</a>
            <ul class="navbar-menu">
                <li><a href="#beranda">Beranda</a></li>
                <li class="dropdown">
                    <button class="dropdown-btn">
                        Jadwal <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#jadwal"><i class="fas fa-calendar-day"></i> Hari Ini</a>
                        <a href="/pengelolaan"><i class="fas fa-calendar-week"></i> Semua Jadwal</a>
                    </div>
                </li>

                <li><a href="#resources">Sumber Belajar</a></li>
                <li class="profile-link">
                    <a href="/profile">
                        <i class="fas fa-user-circle"></i>
                        <span>{{ $username ?? 'Nama Pengguna' }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>
