#!/usr/bin/env bash

docker  exec -it -u root astromancy.php-fpm php artisan doctrine:migrations:diff