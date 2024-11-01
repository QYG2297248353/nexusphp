FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    libpq-dev \
    libzip-dev \
    libxml2-dev \
    libonig-dev \
    libgmp-dev \
    libjpeg-dev \
    libpng-dev \
    libcurl4-openssl-dev \
    supervisor \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    bcmath \
    gd \
    mysqli \
    pcntl \
    sockets \
    gmp \
    opcache \
    && pecl install redis \
    && docker-php-ext-enable redis

ENV PROJECT_SOURCE_PATH=/usr/src/nexusphp
ENV ROOT_PATH=/var/www/html
ENV RUN_PATH=${ROOT_PATH}/public
ENV PHP_USER=www-data

RUN mkdir -p $PROJECT_SOURCE_PATH $RUN_PATH && chown -R $PHP_USER:$PHP_USER $PROJECT_SOURCE_PATH $ROOT_PATH

COPY . $PROJECT_SOURCE_PATH

WORKDIR $PROJECT_SOURCE_PATH

RUN composer install

RUN cp -R nexus/Install/install public/

RUN chown -R $PHP_USER:$PHP_USER $ROOT_PATH

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

CMD ["/entrypoint.sh"]
