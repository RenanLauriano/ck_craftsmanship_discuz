FROM php:7.2-apache

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN docker-php-ext-install mysqli

WORKDIR /var/www/html
COPY discuz/ .
RUN chmod -R 777 *