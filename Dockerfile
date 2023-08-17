FROM php:8.2-cli

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

RUN apt update && apt install -y unzip

COPY --from=composer /usr/bin/composer /usr/bin/composer
