FROM yilutech/phpfpm

COPY . /apps/

RUN apk update && apk add nginx \
 && cd /apps && composer install
