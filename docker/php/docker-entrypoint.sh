#!/bin/sh
set -e

# First arg is `-f` or `--some-option`
if [ "${1#-}" != "$1" ]; then
	set -- php-fpm "$@"
fi

if [ "$1" = 'php-fpm' ] || [ "$1" = 'php' ]; then
    # Install dependencies if vendor directory doesn't exist or is empty
    if [ ! -d "vendor" ] || [ -z "$(ls -A vendor)" ]; then
        echo "Running composer install..."
        composer install --prefer-dist --no-progress --no-interaction
    fi
fi

exec "$@"
