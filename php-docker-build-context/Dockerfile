FROM php:7.2.1-apache


RUN docker-php-ext-install pdo pdo_mysql mysqli
COPY php.ini $PHP_INI_DIR/php.ini
RUN a2enmod rewrite
RUN service apache2 restart