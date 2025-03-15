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
