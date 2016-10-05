FROM php:7-apache

COPY apache2.conf /etc/apache2/apache2.conf

RUN apt-get update && \
    apt-get install -y \
        zlib1g-dev
		
RUN apt-get update && \
    apt-get install -y \
        libicu-dev
		
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

RUN apt-get update && apt-get install -y vim

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mbstring

RUN docker-php-ext-install exif
RUN docker-php-ext-install zip

RUN docker-php-ext-install intl

RUN a2enmod rewrite