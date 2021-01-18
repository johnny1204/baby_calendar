build:
	docker-compose build

init:
	cp ./.env.example .env
	make down
	make build
	rm -rf ./docker/mysql/data
	make clean
	docker-compose run --rm php php artisan key:generate
	php artisan migrate

up:
	docker-compose up

down:
	docker-compose down

clean:
	composer install
	composer dump-autoload
	php artisan optimize:clear

restart:
	docker-compose restart

test:
	docker-compose run --rm web ./vendor/bin/phpstan analyse --memory_limit=-1
	docker-compose run --rm web ./vendor/bin/phpunit