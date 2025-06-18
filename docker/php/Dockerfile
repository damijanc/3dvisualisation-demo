FROM php:8.4-fpm-alpine

# Install dependencies
RUN apk add --no-cache \
    git \
    zip \
    unzip \
    libzip-dev \
    icu-dev

# Install PHP extensions
RUN docker-php-ext-install \
    zip \
    intl \
    opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configure PHP
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Copy entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint
RUN chmod +x /usr/local/bin/docker-entrypoint

# Set working directory
WORKDIR /var/www/html

# Expose port 9000
EXPOSE 9000

ENTRYPOINT ["docker-entrypoint"]
CMD ["php-fpm"]
