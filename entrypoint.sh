#!/bin/bash

if [ ! -d "/data/html" ]; then
    cp -r $ROOT_PATH /data/html
fi

exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
