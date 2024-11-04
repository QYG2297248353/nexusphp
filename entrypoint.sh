#!/bin/bash

if [ -z "$(ls -A /var/www/html)" ]; then
    cp -R /tmp/app/* /var/www/html/
fi

exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf
