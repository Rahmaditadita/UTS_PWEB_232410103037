document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        const btn = dropdown.querySelector('.dropdown-btn');
        const content = dropdown.querySelector('.dropdown-content');

        if (btn && content) {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();

                document.querySelectorAll('.dropdown').forEach(d => {
                    if (d !== dropdown) {
                        d.classList.remove('active');
                    }
                });

                dropdown.classList.toggle('active');
            });
        }
    });

    document.addEventListener('click', function() {
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            dropdown.classList.remove('active');
        });
    });

    document.querySelector('a[href="#jadwal"]').addEventListener('click', function () {
    });
});
