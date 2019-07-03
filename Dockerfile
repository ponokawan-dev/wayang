FROM php:7
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
RUN composer install
EXPOSE 8000
