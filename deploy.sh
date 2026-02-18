#!/bin/bash
# Unitas Movers — Production Deployment Script
# Usage: ssh root@159.203.23.196 'cd /var/www/unitasmovers && bash deploy.sh'

set -e

echo "==> Pulling latest code..."
git pull origin main

echo "==> Installing Composer dependencies..."
COMPOSER_ALLOW_SUPERUSER=1 composer install --optimize-autoloader --no-dev --quiet

echo "==> Installing Node dependencies and building assets..."
npm install --silent
npm run build

echo "==> Publishing Filament assets..."
php artisan filament:assets

echo "==> Publishing Livewire assets..."
php artisan livewire:publish --assets

# Symlink for Livewire JS (Nginx serves static files directly)
if [ ! -L public/livewire ]; then
    ln -sf /var/www/unitasmovers/public/vendor/livewire public/livewire
fi

echo "==> Running migrations..."
php artisan migrate --force

echo "==> Caching config, routes, views..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "==> Setting permissions..."
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

echo "==> Restarting PHP-FPM..."
systemctl restart php8.3-fpm

echo "✓ Deployment complete!"
