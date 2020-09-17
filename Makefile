DOCKER_COMPOSE = docker-compose
EXEC_PHP       = $(DOCKER_COMPOSE) exec php /entrypoint
SYMFONY        = $(EXEC_PHP) bin/console
COMPOSER       = $(EXEC_PHP) composer
##
## Docker and setup
## -------
##
pull:
	$(DOCKER_COMPOSE) pull
build:
	$(DOCKER_COMPOSE) build
kill:
	$(DOCKER_COMPOSE) kill
	$(DOCKER_COMPOSE) down --volumes --remove-orphans
install: pull start vendor db                            ## Install and start the project
reset: kill install                                          ## Stop and start a fresh install of the project
restart: down start                                          ## Restarts the project
start:                                                       ## Start the project
	$(DOCKER_COMPOSE) up -d
down:                                                        ## Down the project
	$(DOCKER_COMPOSE) down || true
stop:                                                        ## Stop the project
	$(DOCKER_COMPOSE) down --volumes --remove-orphans
clean: kill                                                  ## Stop the project and remove generated files
	rm -rf vendor var/cache/* var/log/* var/sessions/* docker/data/*
.PHONY: pull build kill install reset restart start down stop clean
##
## PHP and Composer
## -------
##
cc:                                                          ## Clear the cache in dev env
	$(SYMFONY) cache:clear --no-warmup
	$(SYMFONY) cache:warmup
php:                                                         ## Run interactive bash inside php
	$(DOCKER_COMPOSE) run --rm php bash
xdebug:                                                      ## Run interactive xdebug bash inside php
	$(DOCKER_COMPOSE) run --rm -e XDEBUG=1 php bash
composer.lock: composer.json                                 ## Updates composer.lock
	$(COMPOSER) update --lock --no-scripts --no-interaction
vendor: composer.lock                                        ## Install dependencies
	$(COMPOSER) install
.PHONY: cc php xdebug
##
## Database
## -------
##
migrate: vendor                                              ## Execute not yet executed migrations
	$(SYMFONY) doctrine:migrations:migrate --no-interaction
diff: vendor                                                 ## Generate a migration by comparing your current database to your mapping information
	$(SYMFONY) doctrine:migrations:diff
db: vendor													 ## Init the database and load fixtures
	$(SYMFONY) doctrine:database:drop --if-exists --force
	$(SYMFONY) doctrine:database:create --if-not-exists
	$(SYMFONY) doctrine:migration:migrate -n
	$(SYMFONY) doctrine:fixtures:load -n

.PHONY: migrate diff db
.DEFAULT_GOAL:= help
help:
	@grep -Eh '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
.PHONY: help
php-cs-fixer:
	$(EXEC_PHP) php vendor/bin/php-cs-fixer fix