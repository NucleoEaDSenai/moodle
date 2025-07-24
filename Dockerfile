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
        pdo \
        pgsql \
        pdo_pgsql \
    && docker-php-ext-enable pgsql pdo_pgsql
