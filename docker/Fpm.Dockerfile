FROM php:8.1-fpm
WORKDIR /var/www/html
COPY composer.json ./
COPY composer.lock ./
RUN apt-get update \
&& docker-php-ext-install pdo_mysql bcmath \
&& curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN pecl install -o -f redis \
&&  rm -rf /tmp/pear \
&&  docker-php-ext-enable redis
