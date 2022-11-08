RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))
# ...and turn them into do-nothing targets
$(eval $(RUN_ARGS):;@:)
.PHONY: help
help: ## Print this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'
build: prepare build-explicit ## Build docker-compose.yml
run: prepare up-explicit ## Run docker-compose.yml
exec: ## Run a command php-fpm container
	docker exec php-fpm $(RUN_ARGS)
shell: ## Enter shell php-fpm container
	docker exec -it php-fpm /bin/bash
prepare:
	cp .env.example .env && \
	echo "\nUSER_ID=$(shell id -u ${USER})\nGROUP_ID=$(shell id -g ${USER})" >> .env
build-explicit:
	docker compose build
up-explicit:
	docker compose up -d

