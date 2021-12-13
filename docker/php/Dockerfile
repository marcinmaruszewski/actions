FROM php:7.4-fpm-alpine3.13
ENV PATH="/var/www/vendor/bin:${PATH}"
ENV COMPOSER_ALLOW_SUPERUSER=1

RUN addgroup -S host -g 1000 && adduser -S host -G www-data -G host -u 1000
RUN apk --no-cache add git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www
WORKDIR /var/www

RUN COMPOSER_CACHE_DIR=/var/www/.composer composer install --no-interaction --no-ansi

#USER host
