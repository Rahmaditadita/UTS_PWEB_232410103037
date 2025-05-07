document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('loginForm');
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const loginBtn = document.getElementById('loginButton');

    const warnings = document.querySelectorAll('.warning-text');

    warnings.forEach(w => w.remove());
    loginBtn.style.cursor = 'pointer';

    function validate() {
      const usernameValid = username.value.trim() !== '';
      const passwordValid = password.value.length >= 8;

      loginBtn.disabled = !(usernameValid && passwordValid);

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

    username.addEventListener('input', validate);
    password.addEventListener('input', validate);
    form.addEventListener('submit', function(e) {
      e.preventDefault();

      if (!loginBtn.disabled) {
        loginBtn.innerHTML = 'Logging in...';
        loginBtn.style.opacity = '0.7';
        setTimeout(() => {
          alert('Login berhasil!');
          window.location.href = '/dashboard';
        }, 1000);
      }
    });
    window.togglePassword = function() {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      document.getElementById('togglePassword').classList.toggle('fa-eye-slash');
    };
  });

  document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();

    if (username !== "" && password.length >= 8) {
        alert("Login berhasil! Selamat datang 😊");
        window.location.href = "/dashboard";
    } else {
        alert("Username atau password tidak valid.");
    }
});
