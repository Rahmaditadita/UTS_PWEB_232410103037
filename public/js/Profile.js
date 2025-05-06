function togglePassword(fieldId, icon) {
    const field = document.getElementById(fieldId);
    if (field.type === "password") {
        field.type = "text";
        icon.textContent = "🙈"; // mata tertutup
    } else {
        field.type = "password";
        icon.textContent = "👁️"; // mata terbuka
    }
}
