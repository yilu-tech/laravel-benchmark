FROM yilutech/phpfpm

COPY . /apps/

RUN cd /apps && composer install
