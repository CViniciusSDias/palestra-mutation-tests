FROM php:latest

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
