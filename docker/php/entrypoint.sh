#!/bin/sh
set -e

# Fix permissions for Laravel writable dirs (avoids chmod "Operation not permitted" on bind mounts)
# Use named volumes for storage and bootstrap/cache so chmod works; ensure ownership and structure
OWNER="${WWW_USER:-www-data}"
GROUP="${WWW_GROUP:-www-data}"
WEBROOT="${WEBROOT:-/var/www}"

mkdir -p "${WEBROOT}/storage/framework/cache/data"
mkdir -p "${WEBROOT}/storage/framework/sessions"
mkdir -p "${WEBROOT}/storage/framework/views"
mkdir -p "${WEBROOT}/storage/logs"
mkdir -p "${WEBROOT}/storage/app/public"
mkdir -p "${WEBROOT}/bootstrap/cache"

chown -R "${OWNER}:${GROUP}" "${WEBROOT}/storage" "${WEBROOT}/bootstrap/cache"
chmod -R 775 "${WEBROOT}/storage" "${WEBROOT}/bootstrap/cache"

# PHP-FPM must run as root so it can open error_log (/proc/self/fd/2); it drops to www-data for workers.
# Other commands (e.g. php artisan) run as www-data.
case "$1" in
    php-fpm|php-fpm-*)
        exec "$@"
        ;;
    *)
        exec su-exec "${OWNER}" "$@"
        ;;
esac
