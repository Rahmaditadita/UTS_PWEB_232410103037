<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Group - @yield('title', 'Halaman')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    @stack('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    @if (!request()->routeIs('profil'))
        @include('components.navbar')
    @endif

    <main class="main-content">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="{{ asset('js/navbar.js') }}"></script>
    @stack('scripts')
</body>
</html>
