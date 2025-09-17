# ---------------------
# Stage 1: Composer dependencies
# ---------------------
FROM composer:2.7 AS composer
WORKDIR /app

# Copy composer files and install dependencies (skip scripts here)
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts

# ---------------------
# Stage 2: Node build (Vite)
# ---------------------
FROM node:20 AS node
WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build

# ---------------------
# Stage 3: PHP + Apache (final image)
# ---------------------
FROM php:8.3-apache

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo gd mbstring xml bcmath \
    && a2enmod rewrite

WORKDIR /var/www/html

# Copy app source
COPY . .

# Copy vendor + built assets from earlier stages
COPY --from=composer /app/vendor ./vendor
COPY --from=node /app/public/build ./public/build

# Set permissions for Laravel
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Run Laravel optimization commands inside PHP container
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan package:discover --ansi

# Expose Apache port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
