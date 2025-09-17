# ---------------------
# Stage 1: Composer (PHP deps)
# ---------------------
FROM composer:2 AS vendor

WORKDIR /app

# Copy composer files and install dependencies (skip artisan hooks)
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress --no-scripts


# ---------------------
# Stage 2: Node (Vite build)
# ---------------------
FROM node:20 AS node

WORKDIR /app

# Copy only package files first (better caching)
COPY package.json package-lock.json* ./
RUN npm install

# Copy all source and build
COPY . .
RUN npm run build

# ---------------------
# Stage 3: PHP + Apache (final image)
# ---------------------
FROM php:8.3-apache

# Install system libs + PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo gd mbstring xml bcmath \
    && a2enmod rewrite

WORKDIR /var/www/html

# Copy Laravel app
COPY . .

# Copy vendor from composer stage
COPY --from=vendor /app/vendor ./vendor

# Copy Vite build output from node stage
COPY --from=node /app/public/build ./public/build

# Change Apache DocumentRoot to /public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's|/var/www/|/var/www/html/public|g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Clear caches + discover packages
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan package:discover --ansi

EXPOSE 80
CMD ["apache2-foreground"]
