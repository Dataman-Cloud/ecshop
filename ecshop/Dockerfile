FROM offlineregistry.dataman-inc.com:5000/library/nginx-php:v1
MAINTAINER yhchen <yhchen@dataman-inc.com>

RUN localedef -i en_US -f UTF-8 en_US.UTF-8 && mkdir -p /usr/local/nginx/html/ecshop

COPY ecshop/ /usr/local/nginx/html/ecshop/

RUN chmod -R 777 /usr/local/nginx/html/ecshop/

COPY usr/ /usr/

EXPOSE 80 443 9000

ENTRYPOINT ["/bin/bash", "-c", "sh -x /usr/local/nginx/sbin/start_services.sh"]
