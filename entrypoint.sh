#!/bin/bash

cp -R /tmp/app/* /var/www/html/ 2>/dev/null

exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf
