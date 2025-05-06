<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Study Group</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    @include('components.navbar')

    <header id="beranda">
        <div class="header-text">
            <h2>Selamat datang, {{ $username }}!</h2>
            <h1>Welcome to Our Study Group 📚</h1>
            <p>
                Tempat yang tepat untuk belajar bersama dengan teman-teman!<br>
                Di sini, kamu bisa menemukan jadwal belajar, materi tambahan,<br>
                serta bergabung dalam diskusi seru sesuai mata pelajaran yang kamu pilih.
            </p>
        </div>
        <div class="header-img">
            <img src="{{ asset('assets/img/2.png') }}" alt="Header Image" class="header-image">
        </div>
    </header>

    <div class="galeri" id="kegiatan">
        <div class="text-galeri">
            <h2>Informasi Kelompok Belajar</h2>
            <h3>Kegiatan Kami</h3>
        </div>
        <div class="gambar">
            <div class="gambar-container">
                <img src="{{ asset('assets/img/6.jpg') }}" alt="Belajar bersama">
                <p>Belajar bersama</p>
            </div>
            <div class="gambar-container">
                <img src="{{ asset('assets/img/7.jpg') }}" alt="Diskusi materi">
                <p>Diskusi materi</p>
            </div>
            <div class="gambar-container">
                <img src="{{ asset('assets/img/1.jpg') }}" alt="Sesi tanya jawab">
                <p>Sesi tanya jawab</p>
            </div>
        </div>
    </div>

    <div class="jadwal-wrapper" id="jadwal">
        <section>
            <h3>Jadwal Pertemuan hari ini</h3>
            <ul>
                <li>Senin - 17:30 WIB (Matematika)</li>
                <li>Senin- 19:00 WIB (Fisika)</li>
                <li>Senin - 20:30 WIB (Bahasa Inggris)</li>
            </ul>
        </section>
    </div>

    <div id="resources">
        <h3>Sumber Belajar</h3>
        <div class="resources-container">
            <a class="resource-item" href="https://www.khanacademy.org/" target="_blank">
                <img src="{{ asset('assets/img/10.png') }}" alt="Khan Academy">
                <span>Khan Academy</span>
            </a>
            <a class="resource-item" href="https://www.coursera.org/" target="_blank">
                <img src="{{ asset('assets/img/12.png') }}" alt="Coursera">
                <span>Coursera</span>
            </a>
            <a class="resource-item" href="https://www.edx.org/" target="_blank">
                <img src="{{ asset('assets/img/13.jpg') }}" alt="edX">
                <span>edX</span>
            </a>
        </div>
    </div>

    @include('components.footer')
</body>
</html>
