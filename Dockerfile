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
    && touch database/database.sqlite \
    && chmod -R 777 storage bootstrap/cache database

# Setup default production .env inside container
RUN cp .env.example .env \
    && sed -i 's/APP_ENV=local/APP_ENV=production/' .env \
    && sed -i 's/APP_DEBUG=true/APP_DEBUG=false/' .env \
    && sed -i 's/SESSION_DRIVER=database/SESSION_DRIVER=file/' .env \
    && sed -i 's/CACHE_STORE=database/CACHE_STORE=file/' .env \
    && sed -i 's/LOG_CHANNEL=stack/LOG_CHANNEL=stderr/' .env \
    && sed -i 's|APP_KEY=|APP_KEY=base64:tX2AQ4oh8i05MY8F1Z5W7dV+YhzUhmY8/bU+UcoJhrM=|' .env

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --ignore-platform-req=php

# Pre-configure environment variables fallback for Render
ENV APP_NAME="Liên Hoa Chi" \
    APP_ENV=production \
    APP_KEY="base64:tX2AQ4oh8i05MY8F1Z5W7dV+YhzUhmY8/bU+UcoJhrM=" \
    APP_DEBUG=false \
    LOG_CHANNEL=stderr \
    DB_CONNECTION=sqlite \
    DB_DATABASE=/var/www/html/database/database.sqlite \
    SESSION_DRIVER=file \
    CACHE_STORE=file

EXPOSE 10000

CMD sh -c "php artisan migrate --force && php artisan storage:link || true; php artisan serve --host=0.0.0.0 --port=\${PORT:-10000}"
