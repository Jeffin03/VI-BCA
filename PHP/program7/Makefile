setup:
	@make build
	@make up
	@make permissions
	@make composer-update

build:
	docker-compose build --no-cache --force-rm

stop:
	docker-compose stop

up:
	docker-compose up -d 

down:
	docker-compose down

composer-update:
	docker exec laravel-dock bash -c "composer update"

start-dev:
	docker exec -it laravel-dock bash

permissions:
	docker exec laravel-dock bash -c "chown -R www-data:www-data ./storage"
	docker exec laravel-dock bash -c "chown -R www-data:www-data ./bootstrap/cache"

data:
	docker exec laravel-dock bash -c "php artisan migrate"
	docker exec laravel-dock bash -c "php artisan db:seed"