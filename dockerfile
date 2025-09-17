# ---------------------
# Stage 3: PHP + Apache (final image)
# ---------------------
FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo gd mbstring xml bcmath \
    && a2enmod rewrite

WORKDIR /var/www/html

# Copy source
COPY . .

# Copy vendor + assets
COPY --from=composer /app/vendor ./vendor
COPY --from=node /app/public/build ./public/build

# 👇 Change Apache DocumentRoot to /public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's|/var/www/|/var/www/html/public|g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan package:discover --ansi

EXPOSE 80
CMD ["apache2-foreground"]
