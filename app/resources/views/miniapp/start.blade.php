<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini App</title>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <link rel="stylesheet" href="{{ asset('build/' . json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)['resources/css/bootstrap.css']['file']) }}">
    <script src="{{ asset('build/' . json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)['resources/js/bootstrap.js']['file']) }}" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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

            <div class="mb-5">
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

            <div class="stat-card mb-2">
                <h3 class="montserrat m-auto pt-4 pb-2 text-break fs-1 text-start">
                    Наши приложения
                </h3>
                <div class="text-center my-3">
                    <div class="row g-3">
                        <div class="col-6 d-flex">
                            <div class="stat-card w-100 text-center d-flex flex-column">
                                <h4 class="stat-number">Информационное</h4>
                                <p class="stat-text text-muted mb-4">Приложение-визитка для представления компании.</p>
                                <div class="mt-auto">
                                    <p class="montserrat stat-price fw-bolder">200 руб/мес</p>
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
                                    <p class="montserrat stat-price fw-bolder">от 500 руб/мес</p>
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
                                    <p class="montserrat stat-price fw-bolder">от 1000 руб/мес</p>
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
                                    <p class="montserrat stat-price fw-bolder">от 1000 руб/мес</p>
                                    <a href="#" class="btn btn-outline-purple w-100 mb-2">Демо</a>
                                    <a href="#" class="btn btn-purple w-100 ">Арендовать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="custom-steps-container text-start">
                <h3 class="montserrat m-auto pt-4 pb-2 text-break fs-1 text-start">
                    Как это работает
                </h3>
                <p class="pb-4">Запуск mini app состоит из нескольких этапов. Которые помогают настроить внешний вид и функционал под Ваши потребности</p>
                <div class="custom-step">
                    <span class="custom-step-number">1</span>
                    <h4 class="montserrat custom-step-title fs-5">Выбираете подходящее приложение</h4>
                    <p class="custom-step-description text-muted">Ознакомьтесь с готовыми шаблонами и подберите тот, что ближе к вашим целям</p>
                </div>
                <div class="custom-step">
                    <span class="custom-step-number">2</span>
                    <h4 class="montserrat custom-step-title fs-5">Настраиваете приложение</h4>
                    <p class="custom-step-description text-muted mb-0">Настраиваете бота в telegram по нашей инструкции</p>
                    <p class="custom-step-description text-muted">Добавляете логотип, меняете цвета, вводите вашу продуктовую линейку или услуги</p>
                </div>
                <div class="custom-step">
                    <span class="custom-step-number">3</span>
                    <h4 class="montserrat custom-step-title fs-5">Запуск и продвижение</h4>
                    <p class="custom-step-description text-muted mb-0">Получаете бота в аренду за фиксированную ежемесячную плату</p>
                    <p class="custom-step-description text-muted">Мы помогаем с продвижением и поддержкой</p>
                </div>
            </div>

            <div class="container">
                <h2 class="montserrat text-center pb-4">Отзывы клиентов</h2>

                <div id="reviewsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Индикаторы -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="2"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="review-card text-center w-75 m-auto">
                                <img class="review-avatar mb-4" src="/image/+k.jpg" alt="">
                                <p class="review-author montserrat">Pluskarma – платформа управления отзывами</p>
                                <p class="review-text text-muted">
                                    После блокировок соцсетей продажи стали печальными. Аудитория перешла в TG...
                                    Мы перешли в Telegram и увеличили продажи в 4 раза. Отличный результат!
                                </p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="review-card text-center w-75 m-auto">
                                <img class="review-avatar mb-4" src="/image/+k.jpg" alt="">
                                <p class="review-author montserrat">Pluskarma – платформа управления отзывами</p>
                                <p class="review-text text-muted">
                                    Мы перешли в Telegram и увеличили продажи в 4 раза. Отличный результат!
                                </p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="review-card text-center w-75 m-auto">
                                <img class="review-avatar mb-4" src="/image/+k.jpg" alt="">
                                <p class="review-author montserrat">Pluskarma – платформа управления отзывами</p>
                                <p class="review-text text-muted">
                                    Боты, которые были 1-2 года назад – это примитивные кнопочные
                                    решения. Мы искали продвинутый вариант, и оказалось,
                                    что есть вы ❤️️
                                    <br>
                                    Наш Телеграм-магазин посещает каждый четвертый подписчик,
                                    а конверсия продаж – 7%.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Стрелки навигации -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <div class="stat-card mb-2">
                <h3 class="montserrat m-auto pt-4 text-break fs-1 text-start">
                    Готовы вывести бизнес на новый уровень?
                </h3>
                <div class="m-auto">
                    <p class="open-sans pt-3 fs-10 text-start text-muted">
                        Оставьте заявку, и мы подберём лучшее решение именно для вашего бизнеса.
                        Доверьте запуск Telegram мини-приложения профессионалам и начните получать
                        результаты уже через несколько дней!
                    </p>
                </div>
                <a href="#" class="btn btn-outline-purple purple w-100 mb-2">Арендовать</a>
                <a href="#" class="btn btn-purple w-100 ">Получить консультацию</a>
            </div>

        </div>
    </section>
    <footer class="custom-footer text-center">
        <p class="mb-4">
            Занимаемся разработкой и внедрением <strong>Telegram-решений</strong> для бизнеса.<br>
            Наша миссия — делать сложные технологии доступными каждому предпринимателю.
        </p>

        <!-- Контакты -->
        <div class="container">
            <div class="d-flex custom-contact-card align-items-center py-2">
                <div class="d-flex m-auto">
                    <i class="bi bi-envelope custom-contact-icon fs-2 mx-3"></i>
                    <p class="text-muted mb-0 custom-contact-text py-2">info@yourcompany.com</p>
                </div>
            </div>

            <div class="d-flex custom-contact-card align-items-center py-2">
                <div class="d-flex m-auto">
                    <i class="bi bi-telephone custom-contact-icon fs-2 mx-3"></i>
                    <p class="text-muted mb-0 custom-contact-text py-2">+7 (495) 123-45-67</p>
                </div>
            </div>

            <div class="d-flex custom-contact-card align-items-center py-2">
                <div class="col-2"></div>
                <div class="col-4">
                    <i class="bi bi-telegram custom-contact-icon fs-2 "></i>
                </div>
                <div class="col-4">
                    <i class="bi bi-whatsapp custom-contact-icon fs-2"></i>
                </div>
                <div class="col-2"></div>
            </div>

            <!-- Кнопка -->
            <a href="tel:+74951234567" class="btn custom-contact-text btn-purple w-100">Позвонить нам</a>
        </div>
        <div class="w-100" style="height: 100px;"></div>
    </footer>

</div>
</body>

<style>
    .custom-footer {
        background-color: #111;
        color: white;
        padding: 30px 20px;
    }

    .custom-contact-card {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .custom-contact-icon,
    .custom-contact-text {
        color: white !important;
    }


    .custom-button:hover {
        background-color: #e68900;
        color: white;
    }
</style>

</html>
