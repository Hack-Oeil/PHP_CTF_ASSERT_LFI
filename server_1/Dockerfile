FROM php:7.4-apache

WORKDIR /var/www/html

RUN apt update

# Activer le module Apache mod_rewrite
RUN a2enmod rewrite

COPY www/ .

RUN service apache2 restart

EXPOSE 80