@extends('miniapp.layouts.demo')

@section('content')
    <div class="container p-0">
        <section class="mb-4">
            <div class="specialist-card">
                <div class="specialist-photo-container">
                    <img src="{{ asset('/image/spec-1.jpg') }}" alt="Специалист" class="img-fluid w-100 specialist-photo">
                </div>
                <div class="p-3 stat-card">
                    <h2 class="montserrat fs-3 mb-2 fw-bold">Фамилия Имя Отчество</h2>
                    <div class="d-flex flex-wrap align-items-center mt-2">
                        <div class="stat-item">
                            <div class="stat-value fw-bold">16 лет</div>
                            <div class="stat-label">стаж</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value fw-bold">Специалист</div>
                            <div class="stat-label">Направление</div>
                        </div>
                    </div>
                    <p class="open-sans pt-3 fs-14 text-start text-muted">
                        Тут можно немного рассказать о себе. Например что я являюсь хорошим специалистом в своей области.
                        Владею техниками: один, два и три. Специализируюсь на определенных работах и многое другое.
                    </p>
                    <div class="mt-4">
                        <button class="btn btn-purple btn-lg w-100">Записаться</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="stat-card mb-4">
            <div>
                <h3 class="montserrat fs-5 mb-3">Выберите дату и время</h3>
                <!-- Выбор даты (горизонтальный скролл) -->
                <div class="date-selector mb-3">
                    <div class="scroll-dates">
                        <div class="d-flex overflow-none">
                            <!-- Даты в новом формате -->
                            <div class="date-item active">
                                <div class="date-top">16 мар.</div>
                                <div class="date-bottom">Воскресенье</div>
                            </div>
                            <div class="date-item">
                                <div class="date-top">21 мар.</div>
                                <div class="date-bottom">Пятница</div>
                            </div>
                            <div class="date-item">
                                <div class="date-top">24 мар.</div>
                                <div class="date-bottom">Понедельник</div>
                            </div>
                            <div class="date-item">
                                <div class="date-top">25 мар.</div>
                                <div class="date-bottom">Вторник</div>
                            </div>
                            <div class="date-item">
                                <div class="date-top">26 мар.</div>
                                <div class="date-bottom">Среда</div>
                            </div>
                            <div class="date-item">
                                <div class="date-top">27 мар.</div>
                                <div class="date-bottom">Четверг</div>
                            </div>
                            <div class="date-item">
                                <div class="date-top">28 мар.</div>
                                <div class="date-bottom">Пятница</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Слоты времени -->
                <div class="time-slots mb-4">
                    <div class="row g-2">
                        <div class="col-2">
                            <div class="time-slot">08:30</div>
                        </div>
                        <div class="col-2">
                            <div class="time-slot">09:00</div>
                        </div>
                        <div class="col-2">
                            <div class="time-slot">10:00</div>
                        </div>
                        <div class="col-2">
                            <div class="time-slot">11:30</div>
                        </div>
                        <div class="col-2">
                            <div class="time-slot">13:00</div>
                        </div>
                        <div class="col-2">
                            <div class="time-slot">14:30</div>
                        </div>
                        <div class="col-2">
                            <div class="time-slot">18:30</div>
                        </div>
                        <div class="col-2">
                            <div class="time-slot">19:00</div>
                        </div>
                        <div class="col-2">
                            <div class="time-slot">20:00</div>
                        </div>
                        <div class="col-2">
                            <div class="time-slot">21:30</div>
                        </div>
                        <div class="col-2">
                            <div class="time-slot">22:00</div>
                        </div>
                        <div class="col-2">
                            <div class="time-slot">22:30</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Информация о местоположении -->
        <section class="stat-card mb-4">
            <div class="">
                <h3 class="montserrat fs-5 mb-3">Адрес приёма</h3>
                <div class="location-info mb-3">
                    <div class="address mb-2">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        <span class="open-sans">г. Москва, ул. Ленина, д. 42</span>
                    </div>
                    <div class="metro mb-2">
                        <i class="bi bi-subway me-2"></i>
                        <span class="open-sans">м. Площадь Революции (450 м)</span>
                    </div>
                </div>
                <div id="map">
                </div>
                <div class="location-details">
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#locationDetails"
                            aria-expanded="false" aria-controls="locationDetails">
                        Как добраться <i class="bi bi-chevron-down ms-1"></i>
                    </button>
                    <div class="collapse multi-collapse mt-2" id="locationDetails">
                        <div class="card card-body">
                            <p class="mb-2">От метро: выйти из станции метро «Площадь Революции», повернуть налево, пройти прямо 300 метров до ТЦ «Центральный», центр находится на 3 этаже.</p>
                            <p class="mb-0">Парковка: бесплатная для пациентов в течение 2 часов при предъявлении талона со стойки регистрации.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Подробная информация о специалисте -->
        <section class="stat-card mb-4">
            <div class="p-3">
                <h3 class="montserrat fs-5 mb-3">О специалисте</h3>

                <!-- Аккордеон с информацией -->
                <div class="accordion" id="specialistAccordion">
                    <!-- Специализация -->
                    <div class="accordion-item border-0 mb-2">
                        <h2 class="accordion-header" id="headingSpecialization">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSpecialization" aria-expanded="false" aria-controls="collapseSpecialization">
                                <i class="bi bi-clipboard2-pulse me-2"></i> Специализация
                            </button>
                        </h2>
                        <div id="collapseSpecialization" class="accordion-collapse collapse" aria-labelledby="headingSpecialization" data-bs-parent="#specialistAccordion">
                            <div class="accordion-body">
                                <ul class="mb-0 ps-3">
                                    <li>Диагностика и лечение терапевтических заболеваний</li>
                                    <li>Профилактика сердечно-сосудистых заболеваний</li>
                                    <li>Лечение заболеваний дыхательных путей</li>
                                    <li>Диспансеризация и профосмотры</li>
                                    <li>Оформление медицинской документации</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Опыт работы -->
                    <div class="accordion-item border-0 mb-2">
                        <h2 class="accordion-header" id="headingExperience">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExperience" aria-expanded="false" aria-controls="collapseExperience">
                                <i class="bi bi-briefcase me-2"></i> Опыт работы
                            </button>
                        </h2>
                        <div id="collapseExperience" class="accordion-collapse collapse" aria-labelledby="headingExperience" data-bs-parent="#specialistAccordion">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <div class="fw-bold mb-1">2020 — н.в.</div>
                                    <div>Клиника «Здоровье», врач-терапевт</div>
                                </div>
                                <div class="mb-3">
                                    <div class="fw-bold mb-1">2015 — 2020</div>
                                    <div>Городская больница №2, врач-терапевт</div>
                                </div>
                                <div>
                                    <div class="fw-bold mb-1">2013 — 2015</div>
                                    <div>Поликлиника №7, участковый терапевт</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Образование -->
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="headingEducation">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEducation" aria-expanded="false" aria-controls="collapseEducation">
                                <i class="bi bi-mortarboard me-2"></i> Образование
                            </button>
                        </h2>
                        <div id="collapseEducation" class="accordion-collapse collapse" aria-labelledby="headingEducation" data-bs-parent="#specialistAccordion">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <div class="fw-bold mb-1">2013</div>
                                    <div>Интернатура, Первый Московский государственный медицинский университет им. И.М. Сеченова</div>
                                </div>
                                <div class="mb-3">
                                    <div class="fw-bold mb-1">2012</div>
                                    <div>Диплом с отличием, Российский национальный исследовательский медицинский университет им. Н.И. Пирогова</div>
                                </div>
                                <div>
                                    <div class="fw-bold mb-1">2018, 2021</div>
                                    <div>Курсы повышения квалификации по направлению «Терапия»</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        .btn-purple {
            background-color: #2196F3 !important;
            border: 2px solid #2196F3;
        }

        .specialist-photo-container {
            position: relative;
            width: 100%;
            max-height: 200px;
            overflow: hidden;
        }

        .specialist-photo {
            object-fit: cover;
            object-position: center top;
            max-height: 300px;
            width: 100%;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-color: #f2f2f2;
            border-radius: 8px;
            padding: 4px 10px;
            margin-right: 8px;
            margin-bottom: 5px;
            min-width: 75px;
        }

        .stat-value {
            font-size: 14px;
            line-height: 1.3;
            color: #333;
        }

        .stat-label {
            font-size: 12px;
            line-height: 1.2;
            color: #777;
        }

        .date-item {
            min-width: 80px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            cursor: pointer;
            padding: 2px;
            margin-right: 8px;
            text-align: center;
            transition: all 0.2s;
            position: relative;
        }

        .date-item.active {
            color: #333;
            border: none;
            position: relative;
            background: white;
        }

        .date-item.active::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 8px;
            padding: 2px;
            background: linear-gradient(75.33deg, #12c2f3, #2281e0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }

        .date-top {
            font-weight: 500;
            font-size: 15px;
            margin-bottom: 2px;
        }

        .date-bottom {
            font-size: 11px;
            color: #666;
        }

        .scroll-dates {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            margin-bottom: 15px;
        }

        .scroll-dates::-webkit-scrollbar {
            display: none;
        }

        .time-slot {
            border-radius: 4px;
            padding: 5px 0;
            text-align: center;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s;
            background-color: #2196F3;
            color: white;
            border-color: #2196F3;
        }

        .accordion-button:not(.collapsed) {
            background-color: #f0f0f0;
            color: #333;
            box-shadow: none;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: #e9e9e9;
        }

        .fs-14 {
            font-size: 14px;
        }

        #map {
            width: 100%;
            height: 150px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            margin-bottom: 15px;
        }
    </style>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Обработка выбора даты
                const dateItems = document.querySelectorAll('.date-item');
                dateItems.forEach(item => {
                    item.addEventListener('click', function() {
                        dateItems.forEach(d => d.classList.remove('active'));
                        this.classList.add('active');
                        // Здесь можно добавить AJAX-запрос для загрузки свободных слотов на выбранную дату
                    });
                });

                // Обработка выбора времени
                const timeSlots = document.querySelectorAll('.time-slot');
                timeSlots.forEach(slot => {
                    slot.addEventListener('click', function() {
                        timeSlots.forEach(t => t.classList.remove('active'));
                        this.classList.add('active');
                    });
                });

                (function() {
                    const script = document.createElement('script');
                    script.type = 'text/javascript';
                    script.charset = 'utf-8';
                    script.async = true;
                    // Заменяем width и height на 100%, указываем id=map
                    script.src = "https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5fb528e63737bfe66060223a3ce814e9ab0a94c2eb7bed020b4641b72051b577&width=100%25&height=100%25&lang=ru_RU&scroll=true&id=map";
                    document.getElementById('map').appendChild(script);
                })();
            });
        </script>
    @endpush
@endsection


