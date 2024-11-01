#!/bin/bash

# 检查持久化目录是否存在，如果不存在则拷贝项目文件
if [ ! -d "/var/www/html" ]; then
    cp -r /usr/src/nexusphp/* /var/www/html/
    chown -R www-data:www-data /var/www/html
    chmod -R 0777 /var/www/html
fi

# 启动 supervisord 以管理服务
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
