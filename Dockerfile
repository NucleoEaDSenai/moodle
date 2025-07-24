FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libzip-dev libjpeg-dev libpng-dev libxml2-dev libonig-dev libcurl4-openssl-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql zip xml mbstring curl gd

COPY moodle-php.ini /usr/local/etc/php/conf.d/
COPY moodle/ /var/www/html/
COPY moodledata/ /var/www/html/moodledata/
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]
