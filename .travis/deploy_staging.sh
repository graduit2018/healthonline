#!/bin/bash
set -e
ssh $USER_STAGING_SERVER@$STAGING_SERVER
cd /var/www/healthonline/
git pull
composer install
php artisan migrate:refresh --seed
