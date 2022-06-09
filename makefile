# Static ———————————————————————————————————————————————————————————————————————————————————————————————————————————————
LC_LANG				= it_IT
DEFAULT_GOAL 		:= help
SHELL 				= /bin/bash
PROJECT_NAME        = $(shell basename $(shell pwd) | tr '[:upper:]' '[:lower:]')

args = $(filter-out $@,$(MAKECMDGOALS))

.PHONY: up stop stan test csfix artisan build coverage

build: ## avvia l'ambiente di sviluppo
		docker-compose run --rm laravel.test sail composer install

stop: ## ferma sail
		@./vendor/bin/sail stop

up: ## avvia sail
		@./vendor/bin/sail up -d

stan: ## avvia phpstan
		@./vendor/bin/sail php ./vendor/bin/phpstan analyse

csfix: ## avvia php-cs-fixer
		@./vendor/bin/sail php ./vendor/bin/php-cs-fixer fix

test: ## avvia la batteria di test
		@./vendor/bin/sail artisan test

coverage: export SAIL_XDEBUG_MODE = coverage
coverage: ## avvia la batteria di test con coverage
		@docker-compose run --rm -e SAIL_XDEBUG_MODE laravel.test sail ./vendor/bin/pest --coverage

artisan: ## esegue artisan
		@./vendor/bin/sail artisan $(call args)

sail: ## esegue sail
		@./vendor/bin/sail $(call args)

.PHONY: help
help: ## Mostra questo messaggio
		@cat $(MAKEFILE_LIST) | grep -e "^[a-zA-Z_\-]*: *.*## *" | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'
