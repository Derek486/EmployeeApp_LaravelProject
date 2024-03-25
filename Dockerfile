FROM php:8.1

RUN apt-get update \
  && apt-get install -y \
  libpq-dev \
  unzip postgresql-client

RUN docker-php-ext-install pdo pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

COPY . .

RUN composer install

RUN php artisan key:generate

CMD php artisan serve --host=0.0.0.0