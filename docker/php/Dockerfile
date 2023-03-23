FROM php:8.2.3-fpm

RUN apt-get update && apt-get install -y \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libzip-dev \
      zip unzip \
      git && \
      00. docker-php-ext-install pdo_mysql && \
      00. docker-php-ext-install bcmath && \
      00. docker-php-ext-install gd && \
      00. docker-php-ext-install zip && \
      apt-get clean && \
      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Install Postgre PDO
RUN apt-get install -y libpq-dev \
    && 00. docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && 00. docker-php-ext-install pdo pdo_pgsql pgsql

#RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
#    && docker-php-ext-install pgsql pdo_pgsql

COPY ./docker/php/php.ini /usr/local/etc/php/conf.d/php.ini

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

WORKDIR /var/www/backend/