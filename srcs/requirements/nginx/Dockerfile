FROM debian:12-slim

RUN apt-get update && apt-get install -y nginx openssl

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
