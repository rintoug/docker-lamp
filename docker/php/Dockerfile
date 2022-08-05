FROM php:8.0-apache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY apache_config.conf /etc/apache2/sites-enabled/000-default.conf

RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    locales \
    git \
    unzip \
    zip \
    curl
