<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Navbar</title>
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icon -->
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">
            <a href="/" class="navbar-brand">Study Group</a>
            <ul class="navbar-menu">
                <li><a href="/">Beranda</a></li>
                <li><a href="/about">Jadwal</a></li>
                <li><a href="/services">Sumber Belajar</a></li>
                <li><a href="/contact">Profile</a></li>
                <li>
                    <button id="logoutBtn" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </li>
            </ul>
        </div>
    </div>

    <!-- Logout Confirmation Modal -->
    <div id="logoutModal" class="logout-modal">
        <div class="logout-modal-content">
            <p>Yakin mau keluar?</p>
            <button id="confirmLogout" class="confirm-logout-btn">OK</button>
            <button id="cancelLogout" class="cancel-logout-btn">Cancel</button>
        </div>
    </div>

    <script src="/js/navbar.js"></script>
</body>
</html>
