FROM php:8.1-fpm

RUN apt-get update && \
    apt-get install -y \
    git \
    unzip \
    supervisor \
    libcurl4-openssl-dev && \
    docker-php-ext-install \
    bcmath \
    ctype \
    curl \
    fileinfo \
    json \
    mbstring \
    openssl \
    pdo_mysql \
    tokenizer \
    xml \
    mysqli \
    gd \
    pcntl \
    sockets \
    posix \
    gmp \
    opcache && \
    pecl install redis && docker-php-ext-enable redis

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . /tmp/app

RUN cp -R /tmp/app/nexus/Install/install /tmp/app/public/

RUN cd /tmp/app && composer install --no-dev --optimize-autoloader

COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

COPY ./entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

RUN chown -R www-data:www-data /var/www/html

ENTRYPOINT ["/entrypoint.sh"]

EXPOSE 9000
