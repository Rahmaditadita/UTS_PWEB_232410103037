document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('loginForm');
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const loginBtn = document.getElementById('loginButton');

    // Hapus semua warning element (kita akan gunakan tooltip modern)
    const warnings = document.querySelectorAll('.warning-text');
    warnings.forEach(w => w.remove());

    // Style untuk button disabled
    loginBtn.style.cursor = 'pointer'; // Selalu tampilkan cursor pointer

    // Validasi real-time yang lebih smooth
    function validate() {
      const usernameValid = username.value.trim() !== '';
      const passwordValid = password.value.length >= 8;

      loginBtn.disabled = !(usernameValid && passwordValid);

      // Beri visual feedback subtle
      if (!usernameValid) {
        username.style.borderColor = '#ff4757';
      } else {
        username.style.borderColor = '#2ed573';
      }

      if (!passwordValid) {
        password.style.borderColor = '#ff4757';
      } else {
        password.style.borderColor = '#2ed573';
      }
    }

    // Event listeners
    username.addEventListener('input', validate);
    password.addEventListener('input', validate);

    // Submit handler
    form.addEventListener('submit', function(e) {
      e.preventDefault();

      if (!loginBtn.disabled) {
        // Animasi loading
        loginBtn.innerHTML = 'Logging in...';
        loginBtn.style.opacity = '0.7';

        // Simulasi proses login
        setTimeout(() => {
          alert('Login berhasil!');
          window.location.href = '/dashboard';
        }, 1000);
      }
    });

    // Toggle password visibility
    window.togglePassword = function() {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      document.getElementById('togglePassword').classList.toggle('fa-eye-slash');
    };
  });

  document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah submit default

    // Validasi form (kalau kamu punya logika khusus)
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();

    if (username !== "" && password.length >= 8) {
        alert("Login berhasil! Selamat datang 😊");

        // Redirect ke dashboard setelah klik OK
        window.location.href = "/dashboard"; // ganti "/dashboard" sesuai dengan route kamu
    } else {
        alert("Username atau password tidak valid.");
    }
});
