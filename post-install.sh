cp src/.env.example src/.env
cd src && composer install
cd ..
docker-compose up -d
docker-compose exec php php /var/www/artisan key:generate
docker-compose exec php php /var/www/artisan migrate
