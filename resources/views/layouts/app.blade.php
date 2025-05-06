<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Group</title>
    {{-- <style>
        .navbar {
            background-color: #00ff44;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            margin: 0 auto;
        }
        .navbar-brand {
            font-size: 1.8rem;
            color: rgb(17, 13, 13);
            text-decoration: none;
            font-weight: bold;
        }
        .navbar-menu {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        .navbar-menu li {
            margin: 0;
        }
        .navbar-menu a {
            color: rgb(23, 6, 6);
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }
        .navbar-menu a:hover {
            color: #ffdd57;
        }
        @media (max-width: 768px) {
            .navbar-menu {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style> --}}
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>
    @include('components.navbar')
    <x-navbar></x-navbar>

    <div class="content">
        @yield('content')
    </div>

    <x-footer></x-footer>

</body>
</html>
