// Toggle password visibility
function togglePassword() {
    const passwordField = document.getElementById('password');
    const toggleIcon = document.getElementById('togglePassword');
    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    }
}

// Enable login button when form is filled
function checkForm() {
    const usernameField = document.getElementById('username');
    const passwordField = document.getElementById('password');
    const loginButton = document.getElementById('loginButton');

    if (usernameField.value && passwordField.value) {
        loginButton.disabled = false;
        loginButton.style.backgroundColor = "#00d5ff"; // Change button color
    } else {
        loginButton.disabled = true;
        loginButton.style.backgroundColor = "#ccc"; // Gray color when disabled
    }
}

// Attach event listeners to form fields
document.getElementById('username').addEventListener('input', checkForm);
document.getElementById('password').addEventListener('input', checkForm);
