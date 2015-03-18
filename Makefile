.PHONY: test fix

test :
	./vendor/bin/phpunit
fix :
	php-cs-fixer fix . --level=psr2

