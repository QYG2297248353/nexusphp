#!/bin/bash

cp -Rn /tmp/app/. /var/www/html/
chown -R www-data:www-data /var/www/html
chmod -R 777 /tmp

exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf
