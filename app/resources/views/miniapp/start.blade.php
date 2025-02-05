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
            <span>TELEGRAM MINI APP</span>
            <span>SITE DEVELOPMENT</span>
            <span>MINI APP DEVELOPMENT</span>
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
            <div class="stat-card my-2">
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
                        <div class="col-6 pe-2">
                            <a href="#" class="btn btn-purple btn-lg w-100">Демо</a>
                        </div>
                        <div class="col-6 ps-2">
                            <a href="#" class="btn btn-outline-purple btn-lg w-100">Консультация</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stat-card mb-2">
                <h3 class="montserrat m-auto pt-4 text-break fs-1 text-start">
                    Кто мы и почему это важно
                </h3>
                <div class="m-auto">
                    <p class="open-sans pt-3 fs-10 text-start text-muted">
                        Мы — команда специалистов, которая помогает бизнесам выйти на новый уровень продаж и
                        взаимодействия с клиентами через Telegram. Наш опыт включает разработку десятков успешных
                        мини-приложений для разных ниш: от локальных кафе до крупных онлайн-магазинов.
                        Мы делаем упор на удобство, простоту интеграции и эффективный результат.
                    </p>
                </div>
            </div>
            <div class="stat-card mb-2">
                <h3 class="montserrat m-auto pt-4 text-break fs-1 text-start">
                    Что мы предлагаем
                </h3>
                <div class="text-center my-3">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="stat-card text-start">
                                <h4 class="stat-number">Готовые mini app</h4>
                                <p class="stat-text text-muted">
                                    У нас есть шаблоны под самые разные направления:
                                    онлайн-магазины, информационное, сервис записи,
                                    доставка многое другое.
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="stat-card text-start">
                                <h2 class="stat-number">Быстрый запуск</h2>
                                <p class="stat-text text-muted">Аренда уже готового решения позволяет стартовать за считанные часы.</p>
                                <p class="stat-text text-muted">Не нужно месяцами ждать разработку и тратить бюджет на тесты.</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="stat-card text-start">
                                <h2 class="stat-number">Персонализация</h2>
                                <p class="stat-text text-muted">Удобно и легко подключаются ваше лого и цвета</p>
                                <p class="stat-text text-muted">При необходимости доработаем функционал под ваши бизнес-задачи.</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="stat-card text-start">
                                <h2 class="stat-number">Поддержка и обслуживание</h2>
                                <p class="stat-text text-muted">Мы берём на себя все технические нюансы, чтобы вы сосредоточились на продажах.</p>
                                <p class="stat-text text-muted">Сервис постоянно развивается и растёт количество услуг.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="montserrat m-auto pt-4 pb-2 text-break fs-1 text-center">
                Наши приложения
            </h3>
            <div class="text-center my-3">
                <div class="row g-3">
                    <div class="col-6 d-flex">
                        <div class="stat-card w-100 text-center d-flex flex-column">
                            <h4 class="stat-number">Информационное</h4>
                            <p class="stat-text text-muted mb-4">Приложение-визитка для представления компании.</p>
                            <div class="mt-auto">
                                <a href="#" class="btn btn-outline-purple w-100 mb-2">Демо</a>
                                <a href="#" class="btn btn-purple w-100 ">Арендовать</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="stat-card w-100 text-center d-flex flex-column">
                            <h2 class="stat-number">Онлайн-магазин</h2>
                            <p class="stat-text text-muted mb-4">Платформа для онлайн-продаж товаров.</p>
                            <div class="mt-auto">
                                <a href="#" class="btn btn-outline-purple w-100 mb-2">Демо</a>
                                <a href="#" class="btn btn-purple w-100 ">Арендовать</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="stat-card w-100 text-center d-flex flex-column">
                            <h2 class="stat-number">Запись на приём</h2>
                            <p class="stat-text text-muted mb-4">Сервис бронирования услуг.</p>
                            <div class="mt-auto">
                                <a href="#" class="btn btn-outline-purple w-100 mb-2">Демо</a>
                                <a href="#" class="btn btn-purple w-100 ">Арендовать</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="stat-card w-100 text-center d-flex flex-column">
                            <h2 class="stat-number">Доставка</h2>
                            <p class="stat-text text-muted mb-4">Инструмент для управления доставкой.</p>
                            <div class="mt-auto">
                                <a href="#" class="btn btn-outline-purple w-100 mb-2">Демо</a>
                                <a href="#" class="btn btn-purple w-100 ">Арендовать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="d-flex justify-content-between py-5">
                    <div class="col-12 ps-2">
                        <a href="#" class="btn btn-purple btn-lg w-100">Арендовать приложение</a>
                    </div>
                </div>
            </div>
            <div class="w-100" style="height: 100px;"></div>
        </div>
    </section>
</div>
</body>

</html>
