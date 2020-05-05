FROM yilutech/phpfpm

COPY . /apps/

RUN composer install
