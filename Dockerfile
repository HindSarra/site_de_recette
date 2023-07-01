FROM php:8.1.21RC1-apache

RUN apt-get update && apt-get install locales locales-all -y

ENV LC_ALL en_US.UTF-8
ENV LANG en_US.UTF-8
ENV LANGUAGE en_US.UTF-8

COPY . /var/www/html

# Apache mod_rewrite headers extensions
RUN a2enmod rewrite
RUN a2enmod headers

# Php config install extensions
RUN apt-get update && apt-get install -y \
  libicu-dev --no-install-recommends && \
  # pecl channel-update pecl.php.net && \
  docker-php-ext-configure intl &&  \
  docker-php-ext-install intl mysqli && \
  docker-php-ext-enable mysqli