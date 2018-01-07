#!/usr/bin/env bash

docker  exec -it -u root astromancy.php-fpm.$1 php artisan doctrine:migrations:diff