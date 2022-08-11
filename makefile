include .env

composer-install: ## docker exec -it easy_up_parsers composer install
	docker exec -it php_kinopoisk composer install

up: ## docker-compose up --build -> docker exec -it easy_up_parsers composer install
	docker-compose up --build -d
	docker exec -it php_kinopoisk composer install

start: ## docker-compose up -d
	docker-compose up -d

stop: ## docker-compose stop
	docker-compose stop

help:
	@grep -E '^[a-zA-Z_0-9-]+:.*?## .*$$' makefile | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help