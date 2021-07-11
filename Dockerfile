#

# PHP Dependencies

#

FROM composer as build1
COPY . .

RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

#####################################################################

#

# Frontend

#

FROM node as build2

RUN mkdir -p /app
WORKDIR /app

COPY --from=build1 /app .

RUN npm install && npm run dev

#####################################################################

FROM php:7.4-fpm

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN apt-get update && apt-get install -y netcat \
    && apt-get install -y libzip-dev zip \
	&& docker-php-ext-install zip mysqli pdo pdo_mysql

COPY --from=build2 --chown=www-data /app .
RUN mv docker-entrypoint.sh /

EXPOSE 9000
USER "www-data:www-data"
ENTRYPOINT ["/bin/sh", "/docker-entrypoint.sh"]