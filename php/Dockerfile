# Используем PHP 8.3 + Nginx
FROM php:8.3-fpm

# Устанавливаем необходимые пакеты
RUN apt-get update && apt-get install -y \
    nginx \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    supervisor \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_pgsql pdo_mysql zip gd bcmath

RUN docker-php-ext-install opcache
RUN docker-php-ext-install exif
RUN docker-php-ext-install intl

# Настраиваем PHP-FPM
RUN sed -i "s/listen = 127.0.0.1:9000/listen = 0.0.0.0:9000/" /usr/local/etc/php-fpm.d/www.conf

RUN rm /etc/nginx/sites-enabled/default

# Копируем конфигурацию Nginx
COPY default.conf /etc/nginx/sites-available/default
RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

# Устанавливаем рабочую директорию
WORKDIR /var/www/app

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN chmod -R 777 /var/www/app/storage

# Открываем порты
EXPOSE 80

# Запуск Nginx и PHP-FPM
CMD service nginx start && php-fpm
