FROM php:5.6.40-fpm

# Pakai repo Debian Stretch (arsip) + matikan valid-until (karena repo lama)
RUN set -eux; \
  echo 'Acquire::Check-Valid-Until "false";' > /etc/apt/apt.conf.d/99no-check-valid-until; \
  printf 'deb [trusted=yes] http://archive.debian.org/debian stretch main contrib non-free\n' > /etc/apt/sources.list; \
  printf 'deb [trusted=yes] http://archive.debian.org/debian-security stretch/updates main contrib non-free\n' >> /etc/apt/sources.list; \
  apt-get -o Acquire::Check-Valid-Until=false update; \
  DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
    libjpeg62-turbo-dev libpng-dev libfreetype6-dev \
    zlib1g-dev libicu-dev libxml2-dev libmcrypt-dev \
    autoconf g++ make; \
  # GD di PHP 5.6 butuh flag lama dan path header di /usr/include
  docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/; \
  docker-php-ext-install -j"$(nproc)" \
    gd mysql mysqli pdo_mysql mbstring mcrypt opcache intl soap; \
  rm -rf /var/lib/apt/lists/*

EXPOSE 9000

