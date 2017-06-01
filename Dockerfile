FROM ecshop-nginx-php

COPY run.sh /
RUN chmod +x /run.sh

ENTRYPOINT ["/run.sh"]
