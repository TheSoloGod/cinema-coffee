FROM php:7.2.23-apache

WORKDIR /

RUN apt-get update

RUN curl -sS https://getcomposer.org/installer | php && \
  mv composer.phar /usr/local/bin/composer

RUN apt-get update && apt-get install -y \
  git \
  wget \
  libpng-dev \
  zlib1g-dev \
  openssl \
  zip \
  unzip \
  nano

RUN docker-php-ext-install gd && \
  docker-php-ext-install opcache && \
  docker-php-ext-install zip && \
  docker-php-ext-install pdo_mysql

RUN apt-get install -y gnupg2 && \

  a2enmod rewrite

RUN apt-get install -y libxrender1 \
    libfontconfig1 \
    libx11-dev \
    libjpeg62 \
    libxtst6

RUN a2enmod proxy ssl proxy_http proxy_ajp

WORKDIR /
COPY ./entry-point.sh /
COPY ./000-default.conf /etc/apache2/sites-available/
COPY php.ini-development $PHP_INI_DIR/php.ini
RUN chmod 777 ./entry-point.sh

WORKDIR /var/www/html/cinema-coffee
#RUN chmod 777 storage
# composer require barryvdh/laravel-debugbar --dev
# composer require barryvdh/laravel-cors

# CMD ["apache2-foreground"]
