<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini App</title>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <link rel="stylesheet" href="{{ asset('build/' . json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)['resources/css/bootstrap.css']['file']) }}">
    <script src="{{ asset('build/' . json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)['resources/js/bootstrap.js']['file']) }}" defer></script>
</head>
<body class="w-100 hero bg-light">
<div class="mobile m-auto">
    <section class="header brand-background">
        <div class="container">
            <div class="d-flex">
                <div class="roboto col-7">
                    <h2 class="bold text-start py-4 mb-0">WeBoomers</h2>
                </div>
                <div class="col-3 d-flex m-auto justify-content-end">
                    <img src="/image/telegram.svg" alt="" class="px-2">
                    <img src="/image/whatsapp.svg" alt="" class="px-2">
                </div>
                <div class="col-2 d-flex m-auto justify-content-end">
                    <button class="btn border-0" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div class="marquee-wrapper">
        <div class="marquee">
            <span>TELEGRAM MINI APP</span>
            <span>SITE DEVELOPMENT</span>
            <span>MINI APP DEVELOPMENT</span>
        </div>
    </div>

    <section class="py-3 text-center">
        <div class="container">

            <div class="">
                <img src="/image/banner-phones-bg.webp" alt="" class="w-75">
            </div>
            <h1 class="montserrat m-auto pt-4 text-break fs-1 text-start">
                Создавайте Telegram Mini App и увеличивайте продажи!
            </h1>
            <div class="m-auto">
                <p class="open-sans pt-3 fs-10 text-start text-muted">
                    Мы разрабатываем и сдаём в аренду готовые Telegram mini app для бизнеса:
                    от точек общепита до интернет-магазинов. Увеличьте конверсию, автоматизируйте продажи и
                    повышайте лояльность клиентов!
                </p>
            </div>
            <div class="mt-4">
                <div class="d-flex justify-content-between pb-4">
                    <a href="#" class="btn btn-purple btn-lg me-3 col-5">Демо</a>
                    <a href="#" class="btn btn-outline-purple btn-lg me-3 col-5">Консультация</a>
                </div>
            </div>
        </div>
    </section>
</div>
</body>

</html>
