FROM php:8.2.5-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql

# COPY create_table.sql /docker-entrypoint-initdb.d/
