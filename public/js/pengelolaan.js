document.addEventListener('DOMContentLoaded', function() {
    // Add active class to current day
    const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    const today = new Date().getDay();
    const currentDay = days[today];

    // Highlight today's schedule
    document.querySelectorAll('.day-section').forEach(section => {
        const dayHeader = section.querySelector('.day-header').textContent.trim();
        if (dayHeader.includes(currentDay)) {
            section.style.borderLeft = '4px solid #4a6baf';
            section.querySelector('.day-header').style.backgroundColor = '#3a5a9f';

            // Add "Today" badge
            const badge = document.createElement('span');
            badge.className = 'badge bg-warning text-dark ms-2';
            badge.textContent = 'Hari Ini';
            section.querySelector('.day-header').appendChild(badge);
        }
    });

    // Add click event for join buttons
    document.querySelectorAll('.btn-join').forEach(btn => {
        btn.addEventListener('click', function(e) {
            if (!confirm('Anda akan meninggalkan halaman ini untuk bergabung meeting. Lanjutkan?')) {
                e.preventDefault();
            }
        });
    });

    // Print schedule functionality
    const printButton = document.getElementById('print-schedule');
    if (printButton) {
        printButton.addEventListener('click', function() {
            window.print();
        });
    }
});
