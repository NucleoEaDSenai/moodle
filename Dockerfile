FROM php:7.4-apache

# Instalar dependências necessárias
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libicu-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxslt-dev

# Instalar extensões PHP obrigatórias e recomendadas
RUN docker-php-ext-install intl soap exif opcache zip mysqli pdo pdo_pgsql

# Configurações do PHP
COPY moodle-php.ini /usr/local/etc/php/conf.d/

# Copiar arquivos do Moodle
COPY moodle/ /var/www/html/
COPY moodledata/ /var/www/moodledata/
RUN chown -R www-data:www-data /var/www/

EXPOSE 80
