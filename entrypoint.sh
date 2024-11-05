#!/bin/bash

cp -Rn /tmp/app/. /var/www/html/
chown -R www-data:www-data /var/www/html
chmod -R 777 /tmp

if [ -f /var/www/html/install.lock ]; then
    echo "初始化已完成，删除 /var/www/html/public/install 目录"
    rm -rf /var/www/html/public/install
else
    echo "请尽快完成站点初始化工作"
fi

service nginx start
exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf
