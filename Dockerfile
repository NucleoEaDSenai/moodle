FROM php:7.4-apache

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libicu-dev \
    libxml2-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxslt-dev \
    libpq-dev \
    zlib1g-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    && docker-php-ext-install \
        intl \
        soap \
        exif \
        opcache \
        zip \
        pdo \
        pgsql \
        pdo_pgsql \
    && docker-php-ext-enable pgsql pdo_pgsql

# Configurações PHP
COPY moodle-php.ini /usr/local/etc/php/conf.d/

# Copiar código do Moodle e permissões
COPY moodle/ /var/www/html/
COPY moodledata/ /var/www/moodledata/
RUN chown -R www-data:www-data /var/www/html /var/www/moodledata
