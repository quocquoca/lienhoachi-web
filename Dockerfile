FROM node:22-alpine AS frontend

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build


FROM php:8.4-cli

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libsqlite3-dev \
    libonig-dev \
    && docker-php-ext-install \
        pdo_sqlite \
        pdo_mysql \
        mbstring \
        bcmath \
        exif \
        pcntl \
        zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

COPY --from=frontend /app/public/build ./public/build

RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache \
    database \
    && chmod -R 775 storage bootstrap/cache

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --ignore-platform-req=php

EXPOSE 10000

CMD sh -c "touch database/database.sqlite && php artisan migrate --force && php artisan storage:link || true; php artisan serve --host=0.0.0.0 --port=\${PORT:-10000}"
