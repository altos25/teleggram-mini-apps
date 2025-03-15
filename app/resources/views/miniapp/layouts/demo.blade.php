<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini App</title>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <link rel="stylesheet" href="{{ asset('build/' . json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)['resources/css/bootstrap.css']['file']) }}">
    <script src="{{ asset('build/' . json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)['resources/js/bootstrap.js']['file']) }}" defer></script>

    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
</head>
<style>
    .header-placeholder {
        height: 78px !important;
    }
</style>
<body class="w-100 hero bg-light">
    <div class="mobile m-auto">
        <header>
            <section class="header-placeholder"></section>
            <section class="header header-fixed">
                <div class="container brand-background mobile">
                    <div class="d-flex">
                        <div class="roboto col-7">
                            <h2 class="bold text-start py-4 mb-0">WeBoomers</h2>
                        </div>
                        <div class="col-3 d-flex m-auto justify-content-end">
                            <a href="https://t.me/altos25">
                                <img src="{{ asset('/image/telegram.svg') }}" alt="" class="px-2">
                            </a>
                            <a href="https://wa.me/79277454649">
                                <img src="{{ asset('/image/whatsapp.svg') }}" alt="" class="px-2">
                            </a>
                        </div>
                        <div class="col-2 d-flex m-auto justify-content-end">
                            <button class="btn border-0 navbar-toggler" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                                </svg>
                            </button>
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
