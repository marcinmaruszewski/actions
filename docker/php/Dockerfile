FROM php:7.4-fpm-alpine3.13
ENV PATH="/var/www/vendor/bin:${PATH}"

RUN addgroup -S host -g 1000 && adduser -S host -G www-data -G host -u 1000
RUN apk --no-cache add git

COPY --from=composer:2.1 /usr/bin/composer /usr/local/bin/composer

USER host

COPY ./ /var/www/html

RUN composer install
