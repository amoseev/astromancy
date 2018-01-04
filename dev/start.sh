#!/bin/sh
docker rm -f $(docker ps -a -q)
docker-compose up --build -d --force-recreate

docker  exec -it -u root astromancy.nginx chown -R www-data:www-data /var/log/nginx
docker  exec -it -u root astromancy.php-fpm chown -R www-data:www-data /var/www/astromancy
docker  exec -it -u root astromancy.php-fpm mkdir -p /var/log/astromancy
docker  exec -it -u root astromancy.php-fpm chown -R www-data:www-data /var/log/astromancy
docker  exec -it -u root astromancy.php-fpm mkdir -p /var/log/php
docker  exec -it -u root astromancy.php-fpm chown -R www-data:www-data /var/log/php
#composer install
docker exec -it -u www-data astromancy.php-fpm composer install
#generate key
docker exec -it -u www-data astromancy.php-fpm php artisan key:generate
#----- application -------
# migrations
docker exec -it -u www-data astromancy.php-fpm php artisan  doctrine:migrations:migrate