#!/bin/bash
set -e
ssh $USER_STAGING_SERVER@$STAGING_SERVER "cd /var/www/healthonline/; git pull;"
ssh $USER_STAGING_SERVER@$STAGING_SERVER "cd /var/www/healthonline/; composer install;"
ssh $USER_STAGING_SERVER@$STAGING_SERVER "cd /var/www/healthonline/; composer dump-autoload;"
ssh $USER_STAGING_SERVER@$STAGING_SERVER "cd /var/www/healthonline/; php artisan migrate:refresh --seed;"

