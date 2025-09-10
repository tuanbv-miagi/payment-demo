FROM php:8.4-rc-fpm

# Cài extension PHP cần thiết
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libjpeg-dev libfreetype6-dev zip unzip \
    && docker-php-ext-install pdo_mysql gd

# Cài Composer (copy từ image chính thức)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY ./src /var/www

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

CMD ["php-fpm"]
