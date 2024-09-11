FROM php:8.3-fpm-alpine AS php-base
WORKDIR /app

FROM php-base AS app
COPY app/www/index.php ./www/index.php

