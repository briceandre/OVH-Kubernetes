FROM debian:stable-slim

LABEL version="1.0" maintainer="ANDRE Brice <brice.andre@ams-solutions.be>"

RUN apt-get update -y && apt-get install -q -y apache2

COPY proxy.conf  /etc/apache2/sites-available/proxy.conf

RUN a2enmod proxy
RUN a2enmod proxy_http
RUN a2enmod proxy_balancer
RUN a2enmod lbmethod_byrequests

RUN a2dissite 000-default.conf
RUN a2ensite proxy.conf 

EXPOSE 80

ENTRYPOINT apache2ctl -D FOREGROUND