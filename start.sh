./vendor/bin/sail down

docker run --rm \
    --pull=always \
    -v "$(pwd)":/opt \
    -w /opt \
    laravelsail/php84-composer:latest \
    bash -c "composer install"

./vendor/bin/sail up --build -d

./vendor/bin/sail artisan migrate:fresh

./vendor/bin/sail artisan db:seed

./vendor/bin/sail artisan voyager:install --with-dummy
