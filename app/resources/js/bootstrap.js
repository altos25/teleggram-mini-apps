import axios from 'axios';
import 'bootstrap';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

document.addEventListener("DOMContentLoaded", function () {
    const marquee = document.querySelector(".marquee");
    marquee.innerHTML += marquee.innerHTML; // Дублируем текст
});

document.addEventListener('DOMContentLoaded', function() {
    // Получаем все ссылки в меню
    const menuLinks = document.querySelectorAll('.menu-overlay .nav-link');
    const menuOverlay = document.getElementById('navbarMenu');
    const burgerButton = document.querySelector('.navbar-toggler');
    const bsCollapse = new bootstrap.Collapse(menuOverlay, { toggle: false });
    
    // Добавляем обработчик для каждой ссылки
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (menuOverlay.classList.contains('show')) {
                bsCollapse.hide();
            }
        });
    });

    // Обработчик для кнопки бургер
    burgerButton.addEventListener('click', (e) => {
        e.preventDefault();
        if (menuOverlay.classList.contains('show')) {
            bsCollapse.hide();
        } else {
            bsCollapse.show();
        }
    });

    // Обработчик для кнопок консультации
    const consultationBtns = document.querySelectorAll('.consultation-btn');
    const feedbackModal = new bootstrap.Modal(document.getElementById('feedbackModal'));
    
    consultationBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Проверяем, запущено ли приложение в Telegram
            if (false) {
                window.Telegram.WebApp.openTelegramLink('https://t.me/Altos25');
            } else {
                // Показываем модальное окно с формой
                feedbackModal.show();
            }
        });
    });

    // Обработка отправки формы
    const feedbackForm = document.getElementById('feedbackForm');
    feedbackForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const formData = {
            name: document.getElementById('name').value,
            phone: document.getElementById('phone').value,
            email: document.getElementById('email').value,
            message: document.getElementById('message').value
        };

        
    });

    // Добавляем функционал копирования телефона
    document.querySelector('.copy-phone-btn').addEventListener('click', function() {
        const phoneNumber = '+79277454649';
        const tooltip = this.querySelector('.tooltip-text');
        
        navigator.clipboard.writeText(phoneNumber).then(function() {
            tooltip.textContent = 'Скопировано!';
            tooltip.style.visibility = 'visible';
            tooltip.style.opacity = '1';
            
            setTimeout(() => {
                tooltip.style.visibility = 'hidden';
                tooltip.style.opacity = '0';
                tooltip.textContent = 'Копировать';
            }, 2000);
        }.bind(this));
    });

    // Добавляем функционал копирования email
    document.querySelector('.copy-email-btn').addEventListener('click', function() {
        const email = 'altos2525@gmail.com';
        const tooltip = this.querySelector('.tooltip-text');
        
        navigator.clipboard.writeText(email).then(function() {
            tooltip.textContent = 'Скопировано!';
            tooltip.style.visibility = 'visible';
            tooltip.style.opacity = '1';
            
            setTimeout(() => {
                tooltip.style.visibility = 'hidden';
                tooltip.style.opacity = '0';
                tooltip.textContent = 'Копировать';
            }, 2000);
        }.bind(this));
    });
});