#!/usr/bin/env bash
set -e

if [ -z "$APP_KEY" ] || [ "$APP_KEY" = "base64:null" ]; then
  php artisan key:generate --force
fi

php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

exec "$@"
