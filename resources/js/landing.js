document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form-join');
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        alert("Terima kasih sudah mendaftar!");
    });
});
