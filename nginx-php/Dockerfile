FROM offlineregistry.dataman-inc.com:5000/library/nginx:v1.11
MAINTAINER yhchen <yhchen@dataman-inc.com>

RUN mkdir -p /data
COPY data/ /data/

RUN cd /data/ && \
wget ftp://mcrypt.hellug.gr/pub/crypto/mcrypt/attic/libmcrypt/libmcrypt-2.5.7.tar.gz && \
tar -zxf libmcrypt-2.5.7.tar.gz && rm -rf libmcrypt-2.5.7.tar.gz && \
cd libmcrypt-2.5.7 && ./configure  --prefix=/usr/local && \
make && make install && cd /data/ && \
yum install -y libxml2-devel libjpeg-devel libpng-devel freetype-devel openssl-devel libcurl-devel libmcrypt-devel gd-devel && yum clean all && \
tar -zxf php-5.5.18.tar.gz && rm -rf php-5.5.18.tar.gz && cd php-5.5.18 && \
./configure --prefix=/usr/local/php55 --with-config-file-path=/usr/local/php55/etc --with-mysql=mysqlnd  --with-zlib --enable-xml --disable-rpath  --enable-bcmath --enable-shmop --enable-sysvsem --with-curl  --enable-fpm  --disable-opcache  --with-mcrypt --with-gd --with-openssl --with-mhash --enable-sockets  --with-xmlrpc -enable-zip --enable-soap --with-config-file-scan-dir=/etc/php.d --with-bz2 --with-curl --with-jpeg-dir --with-png-dir && \
make && make install && \
cp php.ini-production  /usr/local/php55/etc/php.ini && \
ln -s /usr/local/php55/etc/php.ini /etc/php.ini && \
cp sapi/fpm/init.d.php-fpm /etc/rc.d/init.d/php-fpm && \
chmod +x /etc/rc.d/init.d/php-fpm && \
chkconfig --add php-fpm && \
chkconfig php-fpm on && \
cp /usr/local/php55/etc/php-fpm.conf.default /usr/local/php55/etc/php-fpm.conf

COPY usr/ /usr/

EXPOSE 80 443 9000

ENTRYPOINT ["/bin/bash", "-c", "sh -x /usr/local/nginx/sbin/start_services.sh"]
