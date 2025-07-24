FROM php:7.4-apache

# Instala dependências
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libzip-dev libjpeg-dev libpng-dev libxml2-dev libonig-dev libcurl4-openssl-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql zip xml mbstring curl gd

# Copia configurações PHP personalizadas
COPY moodle-php.ini /usr/local/etc/php/conf.d/

# Copia os arquivos do Moodle para a pasta pública do Apache
COPY moodle/ /var/www/html/

# Copia a pasta de dados para fora da pasta pública
COPY moodledata/ /var/www/moodledata/

COPY moodle-php.ini /usr/local/etc/php/conf.d/

# Define permissões adequadas
RUN chown -R www-data:www-data /var/www/html /var/www/moodledata



EXPOSE 80
CMD ["apache2-foreground"]
