FROM phpdockerio/php74-cli
RUN mkdir /script
WORKDIR /script
EXPOSE 3000
COPY . .