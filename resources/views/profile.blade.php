<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Halaman</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="profile-container">
        <div class="profile-header">
            <i class="fa-solid fa-user"></i>
            <span id="username-display">{{ $username }}</span>
        </div>
        <button id="edit-profile-btn" onclick="toggleEdit()">Edit Username</button>
        <div id="edit-profile-form" style="display: none;">
            <input type="text" id="username-input" value="{{ $username }}">
            <button id="save-btn" onclick="saveProfile()">Save</button>
        </div>
        <div class="password-section">
            <label for="password">Password</label>
            <input type="password" id="password" value="12345678" readonly>
            <button type="button" onclick="togglePasswordVisibility()">
                <i id="password-eye" class="fa-solid fa-eye"></i>
            </button>
        </div>
        <div class="profile-actions">
            <a href="{{ route('logout') }}" class="btn-logout">LOGOUT</a>
        </div>
        <div id="logoutModal" class="modal">
            <div class="modal-content">
                <h3>Apakah Anda yakin ingin logout?</h3>
                <div class="modal-buttons">
                    <button id="confirmLogout">Yes, Logout</button>
                    <button id="cancelLogout">Cancel</button>
                </div>
            </div>
        </div>


    <script src="{{ asset('js/profile.js') }}"></script>

</body>
</html>
