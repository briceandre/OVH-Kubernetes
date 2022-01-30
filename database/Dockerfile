FROM postgres

LABEL version="1.0" maintainer="ANDRE Brice <brice.andre@ams-solutions.be>"

ENV POSTGRES_USER data_user
ENV POSTGRES_PASSWORD data_password
ENV POSTGRES_DB data_db
ENV PGDATA /home/data/db

COPY init.sql /docker-entrypoint-initdb.d/