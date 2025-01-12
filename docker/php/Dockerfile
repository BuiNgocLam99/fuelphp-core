FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    wget \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mbstring pdo pdo_mysql

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

RUN curl https://get.fuelphp.com/oil | sh

COPY src /var/www/html

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

RUN wget -O phpunit.phar https://phar.phpunit.de/phpunit-7.phar \
    && chmod +x phpunit.phar \
    && mv phpunit.phar /usr/local/bin/phpunit

# chạy thêm composer require phpunit/phpunit:^7 --dev trong container để đồng bộ giữa phpunit và phpunit global
# không dùng phpunit bản 8 trở lên vì phải dùng chữ ký :void trong fuel/core/tests/agent.php file

EXPOSE 9000
