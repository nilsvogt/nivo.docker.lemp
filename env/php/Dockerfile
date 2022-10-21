FROM php:8.1-fpm

RUN apt update && apt-get install -y vim zlib1g-dev g++ git libicu-dev zip libzip-dev zip \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

# https://pecl.php.net/package/redis
RUN pecl install redis-5.3.7 \ 
    && pecl install xdebug-3.1.5 \
    && docker-php-ext-enable redis xdebug


WORKDIR /var/www/app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#RUN curl -sS https://get.symfony.com/cli/installer | bash
#RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony