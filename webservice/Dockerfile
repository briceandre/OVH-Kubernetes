FROM debian:stable-slim

LABEL version="1.0" maintainer="ANDRE Brice <brice.andre@ams-solutions.be>"

RUN apt-get update -y && apt-get install -q -y apache2 php php-pgsql libapache2-mod-php

RUN rm /var/www/html/*
COPY html /var/www/html

EXPOSE 80

WORKDIR  ${DOCUMENTROOT}

ENTRYPOINT apache2ctl -D FOREGROUND