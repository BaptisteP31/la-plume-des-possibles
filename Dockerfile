FROM php:apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN service apache2 restart