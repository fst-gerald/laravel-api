FROM php:8.1-fpm

RUN apt-get update -y \
    && apt-get install -y libpng-dev \
    libjpeg-dev \
    zip \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libicu-dev \
    libpq-dev

RUN docker-php-ext-configure gd \
	&& docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install gd \
    && docker-php-ext-install intl \
    && apt-get install -y libonig-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer