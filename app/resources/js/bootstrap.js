import axios from 'axios';
import * as BS from 'bootstrap';

window.bootstrap = BS;
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

document.addEventListener("DOMContentLoaded", function () {
    const marquee = document.querySelector(".marquee");
    marquee.innerHTML += marquee.innerHTML; // Дублируем текст
});

document.addEventListener('DOMContentLoaded', function() {
    const menuLinks = document.querySelectorAll('[data-menu-link]');
    const menuOverlay = document.getElementById('navbarMenu');

    if (menuOverlay) {
        const bsCollapse = new BS.Collapse(menuOverlay, { toggle: false });

        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (menuOverlay.classList.contains('show')) {
                    bsCollapse.hide();
                }
            });
        });
    }

    // Обработчик для кнопок консультации
    const consultationBtns = document.querySelectorAll('.consultation-btn');
    const feedbackModalEl = document.getElementById('feedbackModal');

    if (feedbackModalEl) {
        const feedbackModal = new BS.Modal(feedbackModalEl);

        consultationBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Проверяем, запущено ли приложение в Telegram
                if (false) {
                    window.Telegram.WebApp.openTelegramLink('https://t.me/Altos25');
                } else {
                    feedbackModal.show();
                }
            });
        });
    }

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
