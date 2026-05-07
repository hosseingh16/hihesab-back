FROM php:8.4-fpm-alpine

# --- Switch Alpine Linux to a working Iranian mirror ---
# Replace default dl-cdn.alpinelinux.org with mirror.iut.ac.ir/pub
RUN sed -i 's|https://dl-cdn.alpinelinux.org|http://mirror.arvancloud.ir|g' /etc/apk/repositories

# System dependencies (su-exec for dropping root in entrypoint)
RUN apk add --no-cache \
    su-exec \
    bash \
    git \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    icu-dev \
    libzip-dev \
    oniguruma-dev \
    nodejs \
    npm

# PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        intl \
        zip \
        gd \
        opcache

# Composer (optional: use Iranian mirror for faster download)
# If you need Composer mirror, uncomment the next line:
# ENV COMPOSER_MIRROR_PATH=https://composer.ir
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Entrypoint runs as root, fixes permissions, then execs as www-data
COPY docker/php/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

# Default CMD; container starts as root, entrypoint fixes perms then execs as www-data
CMD ["php-fpm"]
