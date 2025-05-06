// navbar.js

// Ambil elemen modal dan tombol logout
const logoutBtn = document.getElementById('logoutBtn');
const logoutModal = document.getElementById('logoutModal');
const confirmLogoutBtn = document.getElementById('confirmLogout');
const cancelLogoutBtn = document.getElementById('cancelLogout');

// Tampilkan modal ketika tombol logout diklik
logoutBtn.addEventListener('click', () => {
    logoutModal.style.display = 'flex';
});

// Sembunyikan modal ketika tombol cancel diklik
cancelLogoutBtn.addEventListener('click', () => {
    logoutModal.style.display = 'none';
});

// Aksi logout ketika tombol OK diklik
confirmLogoutBtn.addEventListener('click', () => {
    // Pindah ke halaman login setelah logout
    window.location.href = '/login'; // Ganti dengan alamat login di aplikasi kamu
});

