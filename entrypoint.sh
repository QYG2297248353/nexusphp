#!/bin/bash

chmod +x /entrypoint.sh

if [ ! -d "/var/www/html" ]; then
    cp -r /usr/src/nexusphp/* /var/www/html/
fi

chown -R www-data:www-data /var/www/html

exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
