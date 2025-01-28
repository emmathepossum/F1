docker run --rm \
    --pull=always \
    -v "$(pwd)":/opt \
    -w /opt \
    laravelsail/php84-composer:latest \
    bash -c "composer install"

./vendor/bin/sail up -d

./vendor/bin/sail artisan migrate:fresh --seed

./vendor/bin/sail artisan voyager:install --with-dummy
