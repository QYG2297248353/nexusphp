#!/bin/bash

if [ ! "$(ls -A $ROOT_PATH)" ]; then
    echo "The project directory is empty, copy the project files to the working directory..."
    cp -R /usr/share/nginx/html/* $ROOT_PATH/
    chown -R $PHP_USER:$PHP_USER $ROOT_PATH
    echo "Project file copy complete."
fi

cd $ROOT_PATH
composer install --no-dev

cron
supervisord -c /etc/supervisor/supervisord.conf

php-fpm
