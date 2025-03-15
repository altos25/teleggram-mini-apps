<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini App</title>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <link rel="stylesheet" href="{{ asset('build/' . json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)['resources/css/bootstrap.css']['file']) }}">
    <script src="{{ asset('build/' . json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)['resources/js/bootstrap.js']['file']) }}" defer></script>

    <link rel="stylesheet" href="{{ asset('build/' . json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)['resources/css/demo.css']['file']) }}">
    <script src="{{ asset('build/' . json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)['resources/js/demo.js']['file']) }}" defer></script>


    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
</head>

<body class="w-100 hero bg-light">
    <div class="mobile m-auto">
        <header>
            <section class="header-placeholder"></section>
            <section class="header header-fixed">
                <div class="container brand-background mobile">
                    <div class="d-flex h-78px">
                        <div class="col-3 m-auto">
                            <a href="/miniapp" class="back-button">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </div>
                        <div class="roboto col-6 m-auto">
                            <h2 class="bold text-start py-4 mb-0 demo-logo">You Company Name</h2>
                        </div>
                        <div class="col-3 d-flex m-auto justify-content-end">
                            <a href="https://t.me/altos25">
                                <img src="{{ asset('/image/telegram.svg') }}" alt="" class="px-2">
                            </a>
                            <a href="https://wa.me/79277454649">
                                <img src="{{ asset('/image/whatsapp.svg') }}" alt="" class="px-2">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </header>


        @yield('content')

        @include('miniapp.layouts.footer')
    </div>
    @stack('scripts')
</body>
</html>
