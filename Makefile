FIG=docker-compose
CONSOLE=php bin/console
RUN=$(FIG) run --rm php_axopen_recrutement
EXEC=$(FIG) exec php_axopen_recrutement
SYMFONY_ENV=dev

.DEFAULT_GOAL :=help

help:
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/\\$$//' | sed -e 's/##//'

##
## Common commands
##---------------------------------------------------------------------------

stop:             ## Stop containers
stop: docker-compose.yml
	$(FIG) stop

ps:               ## List containers
ps: docker-compose.yml
	docker ps

php:       ## Open shell dws_api
php:
	docker-compose exec php_axopen_recrutement bash

cc:               ## Clear cache in back for dev env
cc:
	$(EXEC) $(CONSOLE) doctrine:cache:clear-metadata --env=$(SYMFONY_ENV)
	$(EXEC) $(CONSOLE) cache:clear --env=$(SYMFONY_ENV)
	$(EXEC) rm -rf var/cache/*


# Internal rules

build:            ## build containers
build:
	$(FIG) build

# Build no-cache
build-nc:         ## build containers
build-nc:
	$(FIG) build --no-cache

up:               ## up containers
up:
	$(FIG) up -d --remove-orphans


# Rules from files

composer_install: ## composer install
composer_install:
	@$(RUN) composer install

composer_update:  ## composer install
composer_update:
	@$(RUN) composer update

composer_dump_autoload: ## composer dump-autoload
composer_dump_autoload:
	@$(RUN) composer dump-autoload -o
