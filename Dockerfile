FROM php:8.1-fpm

RUN apt-get update && apt-get install -y --no-install-recommends \
    curl \
    libfreetype6-dev \
    libjpeg-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    cron \
    supervisor \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

RUN php -m

RUN docker-php-ext-install -j$(nproc) \
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
    redis \
    sockets \
    posix \
    gmp \
    opcache

ENV ROOT_PATH="/var/www/html"
ENV WORK_DIR="${ROOT_PATH}/public"
ENV PHP_USER="www-data"

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

COPY nexus-queue.conf /etc/supervisor/conf.d/nexus-queue.conf

ENTRYPOINT ["/usr/local/bin/start.sh"]
