import axios from 'axios';
import 'bootstrap';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

document.addEventListener("DOMContentLoaded", function () {
    const marquee = document.querySelector(".marquee");
    marquee.innerHTML += marquee.innerHTML; // Дублируем текст
});