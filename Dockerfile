FROM php:8.1.4-apache-buster

COPY src/ /var/www/html

EXPOSE 80 443