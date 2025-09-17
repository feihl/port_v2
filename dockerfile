# ---------------------
# Stage 1: Composer dependencies
# ---------------------
FROM composer:2.7 AS composer
WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

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

# Install PHP extensions needed for Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo gd mbstring xml bcmath \
    && a2enmod rewrite

WORKDIR /var/www/html

# Copy app source
COPY . .

# Copy dependencies from build stages
COPY --from=composer /app/vendor ./vendor
COPY --from=node /app/public/build ./public/build

# Set permissions for storage & bootstrap
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Expose Apache port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
