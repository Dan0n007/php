FROM php:8.1-apache

RUN apt-get update \
  && apt-get install -y libzip-dev git wget --no-install-recommends \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN wget https://getcomposer.org/download/2.0.9/composer.phar \
    && mv composer.phar /usr/bin/composer && chmod +x /usr/bin/composer

RUN a2enmod rewrite
RUN a2enmod alias
RUN a2enmod authz_core
RUN a2enmod autoindex
RUN a2enmod deflate
RUN a2enmod expires
RUN a2enmod filter
RUN a2enmod headers
RUN a2enmod setenvif

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install opcache
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install pdo

COPY ./docker/web/apache.conf /etc/apache2/sites-enabled/000-default.conf
COPY ./docker/web/php.ini /usr/local/etc/php/conf.d/php.ini

WORKDIR /var/www/php-parsers

CMD ["apache2-foreground"]