#!/bin/sh
docker  exec -it -u www-data astromancy.php-fpm rm -rf /var/log/astromancy
docker  exec -it -u www-data astromancy.php-fpm rm -rf /var/log/php