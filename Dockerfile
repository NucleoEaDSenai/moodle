FROM php:7.4-apache

# Instalar pacotes e bibliotecas necessários
RUN apt-get update && apt-get install -y \
    unzip \
    git \
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
        mysqli \
        pdo \
        pdo_pgsql \
    && docker-php-ext-enable opcache

# Copia o arquivo de configuração PHP customizado
COPY moodle-php.ini /usr/local/etc/php/conf.d/

# Copia os arquivos do Moodle (assumindo que estão na pasta "moodle/")
COPY moodle/ /var/www/html/

# Copia a pasta de dados do Moodle (ela deve estar fora do /html para segurança, se possível)
COPY moodledata/ /var/www/moodledata/

# Ajusta permissões
RUN chown -R www-data:www-data /var/www

# Porta exposta
EXPOSE 80
