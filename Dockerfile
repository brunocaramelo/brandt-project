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
RUN chown -R www-data:www-data /app \
    && a2enmod rewrite
