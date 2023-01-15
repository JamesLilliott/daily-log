# Pull new changes and run migrations
git pull
php artisan migrate

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimise and Cache
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
