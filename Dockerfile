FROM php:7.4.8-apache
RUN apt-get update && apt-get install -y \
    && docker-php-ext-install pdo pdo_mysql

COPY composer.json composer.lock /app/

RUN composer install  \
    --ignore-platform-reqs \
    --no-ansi \
    --no-autoloader \
    --no-interaction \
    --no-scripts \
    --prefer-dist

COPY . /public/

WORKDIR /public

RUN composer dump-autoload --optimize --classmap-authoritative

COPY vhost.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80
EXPOSE 443


ENV CUSTOM_DOMAIN=repo-registry-local.ftd.com.br

RUN apk update && \
    apk add --no-cache openssl && \
    openssl req -x509 -nodes -days 365 \
    -subj  "/C=CA/ST=QC/O=Company Inc/CN=$CUSTOM_DOMAIN" \
     -newkey rsa:2048 -keyout /etc/ssl/private/registry-selfsigned.key \
     -out /etc/ssl/certs/registry-selfsigned.crt;

RUN chown -R www-data:www-data /app \
    && a2enmod rewrite && a2enmod ssl
