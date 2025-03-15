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
                    <button class="btn border-0 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <!-- Меню с аккордеоном Bootstrap 5 -->
        <div class="menu-overlay mobile m-auto collapse" id="navbarMenu">
            <div class="menu-header">
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Поиск" class="search-input">
                </div>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#about" data-menu-link>
                        <i class="bi bi-house-door me-3"></i>
                        <span>О нас</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#services" data-menu-link>
                        <i class="bi bi-grid me-3"></i>
                        <span>Наши приложения</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#how-it-works" data-menu-link>
                        <i class="bi bi-gear me-3"></i>
                        <span>Как это работает</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#services2" data-menu-link>
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
                    <a class="nav-link d-flex align-items-center" href="#reviews" data-menu-link>
                        <i class="bi bi-star me-3"></i>
                        <span>Отзывы</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#contact" data-menu-link>
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
</header>


