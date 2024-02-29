php-test:
	vendor/bin/phpunit  test/Api
phpstan:
	vendor/bin/phpstan analyse lib --level 7
php:
	rm -rf docs && \
	rm -rf lib/Model && \
	rm -rf lib/Api && \
	docker run --rm \
	-v ${PWD}:/local openapitools/openapi-generator-cli:v7.2.0 generate \
		-i https://raw.githubusercontent.com/conekta/femsa-openapi/main/_build/api.yaml \
		-g php \
		-o /local \
		-c /local/config-php.json \
		--global-property modelTests=false
