.PHONY: test fix

test :
	vendor/bin/phpunit
	tests/functional/test.sh

cs-fix :
	php-cs-fixer fix . --level=psr2 || true

