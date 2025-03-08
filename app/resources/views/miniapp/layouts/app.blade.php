<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini App</title>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <link rel="stylesheet" href="{{ asset('build/' . json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)['resources/css/bootstrap.css']['file']) }}">
    <script src="{{ asset('build/' . json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)['resources/js/bootstrap.js']['file']) }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="w-100 hero bg-light">
    <div class="mobile m-auto">
        @include('miniapp.layouts.header')

        @yield('content')

        @include('miniapp.layouts.footer')
    </div>

    @stack('scripts')
</body>
</html> 