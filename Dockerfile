FROM php:8.1-apache

RUN apt-get update && \
    apt-get install -y \
    git \
    unzip \
    supervisor \
    libcurl4-openssl-dev \
    libxml2-dev \
    libsqlite3-dev \
    libzip-dev \
    libpq-dev \
    libonig-dev \
    libgmp-dev \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install \
    bcmath \
    pdo_mysql \
    mysqli \
    gd \
    pcntl \
    sockets \
    gmp \
    opcache && \
    pecl install redis && docker-php-ext-enable redis

RUN a2enmod rewrite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html/public

COPY . /tmp/app

RUN cp -R /tmp/app/nexus/Install/install /tmp/app/public/
RUN cd /tmp/app && composer install --no-dev --optimize-autoloader

COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY ./entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh && \
    chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

ENTRYPOINT ["/entrypoint.sh"]

EXPOSE 80
