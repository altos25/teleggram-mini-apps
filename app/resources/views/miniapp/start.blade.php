@extends('miniapp.layouts.app')

@section('content')
    <section>
        <!-- Меню -->
        <div class="menu-overlay mobile m-auto collapse" id="navbarMenu">
            <div class="menu-header">
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Поиск" class="search-input">
                </div>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#about">
                        <i class="bi bi-house-door me-3"></i>
                        <span>О нас</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#services">
                        <i class="bi bi-grid me-3"></i>
                        <span>Наши приложения</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#how-it-works">
                        <i class="bi bi-gear me-3"></i>
                        <span>Как это работает</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#services2">
                        <i class="bi bi-collection me-3"></i>
                        <span>Что мы предлагаем</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center consultation-btn" type="button">
                        <i class="bi bi-collection me-3"></i>
                        <span>Консультация</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#reviews">
                        <i class="bi bi-star me-3"></i>
                        <span>Отзывы</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#contact">
                        <i class="bi bi-envelope me-3"></i>
                        <span>Контакты</span>
                    </a>
                </li>
            </ul>
            <div class="menu-footer">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="bi bi-envelope-fill"></i>
                        <span>altos2525@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-telephone-fill"></i>
                        <span>8 (927) 745-46-49</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 text-center">
        <div class="container">
            <div class="mb-5">
                <img src="/image/banner-phones-bg.webp" alt="" class="w-75">
            </div>
            <div class="stat-card my-2" id="about">
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
                            <a href="#services2" class="btn btn-purple btn-lg w-100">Демо</a>
                        </div>
                        <div class="col-6 ps-2">
                            <button class="btn btn-outline-purple btn-lg w-100 consultation-btn">Консультация</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stat-card mb-2" id="who-we-are">
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
            <div class="stat-card mb-2" id="services2">
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

            <div class="stat-card mb-2" id="services">
                <h3 class="montserrat m-auto pt-4 pb-2 text-break fs-1 text-start">
                    Наши приложения
                </h3>
                <div class="text-center my-3">
                    <div class="row g-3">
                        <div class="col-6 col-ss-12 d-flex">
                            <div class="stat-card w-100 text-center d-flex flex-column">
                                <h4 class="stat-number">Информационное</h4>
                                <p class="stat-text text-muted mb-4">Приложение-визитка для представления компании.</p>
                                <div class="mt-auto">
                                    <p class="montserrat stat-price fw-bolder">200 руб/мес</p>
                                    <a href="/demo/info" class="btn btn-outline-purple w-100 mb-2">Демо</a>
                                    <a href="/rent/info" class="btn btn-purple w-100 ">Арендовать</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-ss-12 d-flex">
                            <div class="stat-card w-100 text-center d-flex flex-column">
                                <h2 class="stat-number">Запись на приём</h2>
                                <p class="stat-text text-muted mb-4">Сервис бронирования услуг.</p>
                                <div class="mt-auto">
                                    <p class="montserrat stat-price fw-bolder">от 500 руб/мес</p>
                                    <a href="/demo/booking" class="btn btn-outline-purple w-100 mb-2">Демо</a>
                                    <a href="/rent/booking" class="btn btn-purple w-100 ">Арендовать</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-ss-12 d-flex">
                            <div class="stat-card w-100 text-center d-flex flex-column">
                                <h2 class="stat-number">Доставка</h2>
                                <p class="stat-text text-muted mb-4">Инструмент для управления доставкой.</p>
                                <div class="mt-auto">
                                    <p class="montserrat stat-price fw-bolder">от 1000 руб/мес</p>
                                    <a href="/demo/delivery" class="btn btn-outline-purple w-100 mb-2">Демо</a>
                                    <a href="/rent/delivery" class="btn btn-purple w-100 ">Арендовать</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 col-ss-12 d-flex">
                            <div class="stat-card w-100 text-center d-flex flex-column">
                                <h2 class="stat-number">Онлайн-магазин</h2>
                                <p class="stat-text text-muted mb-4">Платформа для онлайн-продаж товаров.</p>
                                <div class="mt-auto">
                                    <p class="montserrat stat-price fw-bolder">от 1000 руб/мес</p>
                                    <a href="/demo/shop" class="btn btn-outline-purple w-100 mb-2">Демо</a>
                                    <a href="/rent/shop" class="btn btn-purple w-100 ">Арендовать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="custom-steps-container text-start" id="how-it-works">
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

            <div class="container" id="reviews">
                <h2 class="montserrat text-center pb-4">Отзывы клиентов</h2>

                <div id="reviewsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Индикаторы -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="2"></button>
                    </div>

                    <div class="carousel-inner pb-3">
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

            <div class="stat-card mb-2" id="contact">
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
                <a href="/rent" class="btn btn-outline-purple purple w-100 mb-2">Арендовать</a>
                <button class="btn btn-purple w-100 consultation-btn">Получить консультацию</button>
            </div>
        </div>
    </section>

    <!-- Модальное окно формы обратной связи -->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="feedbackModalLabel">Получить консультацию</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="feedbackForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Ваше имя</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Телефон или Telegram (например, @username)</label>
                            <input type="text" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Сообщение (необязательно)</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-purple flex-grow-1">Отправить</button>
                            <a href="https://t.me/altos25" class="btn btn-outline-purple">
                                <i class="bi bi-telegram me-2"></i>Написать в Telegram
                            </a>
                        </div>
                    </form>
                    <div class="mt-4">
                        <p class="text-muted small">
                            Оставьте ваш контакт, и наш менеджер свяжется с вами в течение 15 минут.
                            Мы ценим ваше время и используем данные только для консультации — никакого спама!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


