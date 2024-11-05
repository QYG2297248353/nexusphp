#!/bin/bash

cp -Rn /tmp/app/* /var/www/html/
chown -R www-data:www-data /var/www/html

exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf
