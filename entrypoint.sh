#!/bin/bash

for file in /tmp/app/*; do
    if [ ! -e "/var/www/html/$(basename "$file")" ]; then
        cp -R "$file" /var/www/html/
    fi
done

exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf
