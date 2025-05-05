<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Group</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <x-navbar></x-navbar>

    <div class="content">
        @yield('content')
    </div>

    <x-footer></x-footer>
</body>
</html>
