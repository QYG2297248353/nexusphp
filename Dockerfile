FROM php:8.1-apache

RUN apt-get update && apt-get install -y --no-install-recommends \
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
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
       gd \
       bcmath \
       curl \
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
       opcache \
    && rm -rf /var/lib/apt/lists/*

ENV ROOT_PATH="/var/www/html"
ENV WORK_DIR="${ROOT_PATH}/public"
ENV PHP_USER="www-data"

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

COPY nexus-queue.conf /etc/supervisor/conf.d/nexus-queue.conf

RUN echo "DocumentRoot ${ROOT_PATH}/public" >> /etc/apache2/apache2.conf

RUN a2enmod rewrite

ENTRYPOINT ["/usr/local/bin/start.sh"]
