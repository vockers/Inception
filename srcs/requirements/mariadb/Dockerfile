FROM debian:12-slim

RUN apt-get update && apt-get install -y mariadb-server

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

EXPOSE 3306

WORKDIR /usr/local/bin

COPY ./tools/setup.sh .
RUN chmod +x ./setup.sh

ENTRYPOINT ["./setup.sh"]

CMD ["mariadbd"]