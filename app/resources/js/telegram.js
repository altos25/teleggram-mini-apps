/**
 * Утилиты для работы с Telegram Mini App API
 */
class TelegramMiniApp {
    constructor() {
        this.tg = window.Telegram?.WebApp;
        this.isInTelegram = !!this.tg;
        
        if (this.isInTelegram) {
            this.init();
        }
    }
    
    /**
     * Инициализация приложения в Telegram
     */
    init() {
        this.tg.ready();
        
        // Устанавливаем тему в зависимости от настроек Telegram
        if (this.tg.colorScheme === 'dark') {
            document.body.classList.add('dark-theme');
        } else {
            document.body.classList.remove('dark-theme');
        }
        
        // Устанавливаем высоту viewport для корректного отображения
        this.setViewportHeight();
        
        // Устанавливаем цвета темы из Telegram
        this.applyTelegramTheme();
        
        // Расширяем область видимости приложения на весь экран
        this.expandToFullHeight();
    }
    
    /**
     * Установка высоты viewport
     */
    setViewportHeight() {
        const viewportHeight = this.tg.viewportHeight || window.innerHeight;
        document.documentElement.style.setProperty('--tg-viewport-height', `${viewportHeight}px`);
        
        // Обновляем высоту при изменении размера окна
        this.tg.onEvent('viewportChanged', () => {
            const newViewportHeight = this.tg.viewportHeight || window.innerHeight;
            document.documentElement.style.setProperty('--tg-viewport-height', `${newViewportHeight}px`);
        });
    }
    
    /**
     * Применение темы Telegram к приложению
     */
    applyTelegramTheme() {
        if (!this.tg.themeParams) return;
        
        const {
            bg_color,
            text_color,
            hint_color,
            link_color,
            button_color,
            button_text_color,
            secondary_bg_color
        } = this.tg.themeParams;
        
        if (bg_color) document.documentElement.style.setProperty('--tg-theme-bg-color', bg_color);
        if (text_color) document.documentElement.style.setProperty('--tg-theme-text-color', text_color);
        if (hint_color) document.documentElement.style.setProperty('--tg-theme-hint-color', hint_color);
        if (link_color) document.documentElement.style.setProperty('--tg-theme-link-color', link_color);
        if (button_color) document.documentElement.style.setProperty('--tg-theme-button-color', button_color);
        if (button_text_color) document.documentElement.style.setProperty('--tg-theme-button-text-color', button_text_color);
        if (secondary_bg_color) document.documentElement.style.setProperty('--tg-theme-secondary-bg-color', secondary_bg_color);
    }
    
    /**
     * Расширение приложения на всю высоту экрана в Telegram
     */
    expandToFullHeight() {
        this.tg.expand();
    }
    
    /**
     * Открыть ссылку в Telegram
     * @param {string} url - URL для открытия
     */
    openTelegramLink(url) {
        if (this.isInTelegram) {
            this.tg.openTelegramLink(url);
        } else {
            window.open(url, '_blank');
        }
    }
    
    /**
     * Отправка данных боту
     * @param {Object} data - Данные для отправки
     */
    sendData(data) {
        if (this.isInTelegram) {
            this.tg.sendData(JSON.stringify(data));
        }
    }
    
    /**
     * Закрытие приложения
     */
    close() {
        if (this.isInTelegram) {
            this.tg.close();
        }
    }
}

// Экспортируем экземпляр класса для использования в других файлах
export const telegramApp = new TelegramMiniApp(); 