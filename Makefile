.PHONY: test fix

test :
	vendor/bin/phpunit
	tests/functional/test.sh

fix :
	php-cs-fixer fix . --level=psr2

