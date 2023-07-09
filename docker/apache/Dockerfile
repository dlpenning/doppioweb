FROM php:8.2-apache
RUN a2enmod rewrite
RUN docker-php-ext-install pdo && docker-php-ext-enable pdo
RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql
RUN apt-get update && apt-get upgrade -y