FROM php:8.2-apache

# Instala dependências do Moodle e extensões PHP
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libzip-dev libjpeg-dev libpng-dev libxml2-dev libonig-dev libcurl4-openssl-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql zip xml mbstring curl gd

# Configura PHP
COPY moodle-php.ini /usr/local/etc/php/conf.d/

# Baixa o Moodle
RUN curl -o moodle.zip https://download.moodle.org/download.php/direct/stable401/moodle-latest-401.zip && \
    unzip moodle.zip -d /var/www/html && \
    chown -R www-data:www-data /var/www/html/moodle && \
    rm moodle.zip

# Define diretório padrão
WORKDIR /var/www/html/moodle

EXPOSE 80
CMD ["apache2-foreground"]
