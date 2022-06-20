FROM php:8.1-apache
RUN docker-php-ext-install mysqli
RUN pecl install xdebug-3.1.4
RUN docker-php-ext-enable xdebug
RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/php.ini

RUN apt-get -y install git
RUN apt-get -y install zip unzip\
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

WORKDIR /var/www/html
COPY . /var/www/html

# Copy composer and vendor
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R u+rwx /var/www/html/