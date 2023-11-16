FROM php:8.2-apache

# Install Composer
RUN apt-get update \
&& apt-get install -y curl git unzip libpq-dev \
&& curl -s https://getcomposer.org/installer | php \
&& mv composer.phar /usr/local/bin/composer

RUN docker-php-ext-install pdo_mysql

RUN mkdir /app
COPY ./ /app/
RUN rm -r /var/www/html && ln -s /app/public /var/www/html

WORKDIR /app/

RUN chown -R $USER:www-data storage
RUN chown -R $USER:www-data bootstrap/cache
RUN chmod -R 775 storage
RUN chmod -R 775 bootstrap/cache

RUN composer install

RUN php artisan key:generate && php artisan config:cache

#RUN php artisan migrate --seed --force

EXPOSE 80
