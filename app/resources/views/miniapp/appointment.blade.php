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
                            <div class="stat-value fw-bold">6 лет</div>
                            <div class="stat-label">стаж</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value fw-bold">Преподаватель</div>
                            <div class="stat-label">Английский, Испанский</div>
                        </div>
                    </div>
                    <p class="open-sans pt-3 fs-14 text-start text-muted">
                        Я помогаю ученикам заговорить на английском и испанском без страха и барьеров.
                        За 6 лет преподавания разработала эффективную методику, которая позволяет быстро увидеть прогресс.
                        Вместе мы сделаем изучение языков увлекательным и результативным!
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
                <div class="date-selector mb-3">
                    <div class="scroll-dates">
                        <div class="d-flex overflow-none">
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

        <section class="stat-card mb-4">
            <div class="">
                <h3 class="montserrat fs-5 mb-3">Адрес</h3>
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
                    <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#locationDetails"
                            aria-expanded="false" aria-controls="locationDetails">
                        Как добраться <i class="bi bi-chevron-down ms-1"></i>
                    </button>
                    <div class="collapse multi-collapse mt-2" id="locationDetails">
                        <div class="card card-body">
                            <p class="mb-2">От метро: выйти из станции метро «Площадь Революции», повернуть налево, пройти прямо 300 метров до ТЦ «Центральный», центр находится на 3 этаже.</p>
                            <p class="mb-0">Парковка: бесплатная для пациентов в течение 2 часов при предъявлении талона.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="stat-card mb-4">
            <div>
                <h3 class="montserrat fs-5 mb-3 px-3">Обо мне</h3>

                <div class="accordion" id="specialistAccordion">
                    <div class="accordion-item border-0 mb-2">
                        <h2 class="accordion-header" id="headingSpecialization">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSpecialization" aria-expanded="false" aria-controls="collapseSpecialization">
                                <i class="bi bi-clipboard2-pulse me-2"></i> Специализация
                            </button>
                        </h2>
                        <div id="collapseSpecialization" class="accordion-collapse collapse" aria-labelledby="headingSpecialization" data-bs-parent="#specialistAccordion">
                            <div class="accordion-body">
                                <p class="open-sans pt-3 fs-15 text-start text-muted">
                                    Помогаю студентам уверенно владеть английским и испанским языками.
                                    В своей работе уделяю внимание практическому использованию языка в различных ситуациях.
                                    Специализируюсь на:
                                </p>
                                <ul class="mb-0 ps-3 open-sans fs-14">
                                    <li>Разговорной практике и преодолении языкового барьера</li>
                                    <li>Подготовке к экзаменам (ЕГЭ, ОГЭ, IELTS, DELE)</li>
                                    <li>Обучении с нуля и улучшении грамматики</li>
                                    <li>Развитии навыков аудирования и чтения</li>
                                    <li>Индивидуальных программах для разных целей (путешествия, бизнес, учёба)</li>
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
                                <p class="open-sans pt-3 fs-15 text-start text-muted">
                                    За 6 лет преподавания помогла десяткам учеников заговорить на английском и испанском уверенно.
                                    Работала с разными возрастными группами и уровнями подготовки.
                                </p>
                                <div class="mb-3 open-sans fs-14">
                                    <div class="fw-bold mb-1">2020 — н.в.</div>
                                    <div>Частная практика, репетитор английского и испанского</div>
                                </div>
                                <div class="mb-3 open-sans fs-14">
                                    <div class="fw-bold mb-1">2015 — 2020</div>
                                    <div>Онлайн-обучение в языковых школах</div>
                                </div>
                                <div class="open-sans fs-14">
                                    <div class="fw-bold mb-1">2013 — 2015</div>
                                    <div>Работала в языковом центре, преподаватель английского и испанского</div>
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
                                <p class="open-sans pt-3 fs-15 text-start text-muted">
                                    Я постоянно совершенствую свои знания, чтобы давать ученикам максимум пользы.
                                </p>
                                <div class="mb-3 open-sans fs-14">
                                    <div class="fw-bold mb-1">2016</div>
                                    <div>Диплом лингвиста-преподавателя, [название университета]</div>
                                </div>
                                <div class="mb-3 open-sans fs-14">
                                    <div class="fw-bold mb-1">2018, 2021</div>
                                    <div>Курсы повышения квалификации по методике преподавания иностранных языков</div>
                                </div>
                                <div class="open-sans fs-14">
                                    <div>Регулярно прохожу тренинги и изучаю современные методики обучения</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


