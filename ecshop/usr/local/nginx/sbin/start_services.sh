#!/bin/sh


sed -i 's/mysql_ip/'"$MYSQL_IP"'/g' /usr/local/nginx/html/ecshop/data/config.php
sed -i 's/mysql_port/'"$MYSQL_PORT"'/g' /usr/local/nginx/html/ecshop/data/config.php
#start php-fmt
/usr/local/php55/sbin/php-fpm

PHP_STATUS=`netstat -apn | grep 9000 | wc -l`
sleep 5
if [ $PHP_STATUS -eq 0 ]; then
    echo "php-fpm start faile!"
    exit -1
fi

#start nginx
/usr/local/nginx/sbin/nginx
