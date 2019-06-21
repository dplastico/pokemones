FROM php:7.3-apache 
RUN apt-get update -qq
RUN docker-php-ext-install mysqli
RUN apt-get install php
RUN apt-get install mysql-server
RUN apt-get install apache2
COPY . /pokemones
WORKDIR /pokemones