function toggleEdit() {
    const editForm = document.getElementById('edit-profile-form');
    const editButton = document.getElementById('edit-profile-btn');

    if (editForm.style.display === 'none') {
        editForm.style.display = 'block';
        editButton.textContent = 'Cancel';
    } else {
        editForm.style.display = 'none';
        editButton.textContent = 'Edit Username';
    }
}

function saveProfile() {
    const usernameInput = document.getElementById('username-input');
    const usernameDisplay = document.getElementById('username-display');

    usernameDisplay.textContent = usernameInput.value;
    toggleEdit();
}
function togglePasswordVisibility() {
    const passwordField = document.getElementById('password');
    const passwordEyeIcon = document.getElementById('password-eye');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        passwordEyeIcon.classList.remove('fa-eye');
        passwordEyeIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        passwordEyeIcon.classList.remove('fa-eye-slash');
        passwordEyeIcon.classList.add('fa-eye');
    }
}

const logoutBtn = document.getElementById('logout-btn');
const logoutModal = document.getElementById('logoutModal');
const confirmLogoutBtn = document.getElementById('confirmLogout');
const cancelLogoutBtn = document.getElementById('cancelLogout');
const logoutForm = document.getElementById('logout-form');

if (logoutBtn) {
    logoutBtn.addEventListener('click', (e) => {
        e.preventDefault();
        logoutModal.style.display = 'flex';
    });
}

if (cancelLogoutBtn) {
    cancelLogoutBtn.addEventListener('click', () => {
        logoutModal.style.display = 'none';
    });
}

if (confirmLogoutBtn) {
    confirmLogoutBtn.addEventListener('click', function() {
        logoutForm.submit();
    });
}

// Close modal when clicking outside
if (logoutModal) {
    logoutModal.addEventListener('click', (e) => {
        if (e.target === logoutModal) {
            logoutModal.style.display = 'none'; 
        }
    });
}
