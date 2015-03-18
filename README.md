# php FizzBuzz Enterprise Edition

[![Build Status](https://travis-ci.org/DQNEO/php-FizzBuzzEnterpriseEdition.svg?branch=develop)](https://travis-ci.org/DQNEO/php-FizzBuzzEnterpriseEdition)

FizzBuzz with too much object oriented programming.

# INSTALLATION

```
git clone https://github.com/DQNEO/php-FizzBuzzEnterpriseEdition.git
cd php-FizzBuzzEnterpriseEdition
composer install
```

# Usage

```
./bin/fizzbuzz.php 100
```

# FizzBuzz

The rules of FizzBuzz are as follows:

For numbers 1 through 100,

* if the number is divisible by 3 print Fizz;
* if the number is divisible by 5 print Buzz;
* if the number is divisible by 3 and 5 (15) print FizzBuzz;
* else, print the number.


# TODO
* enable to select various writer (stdout, stderr, mail, fluent, file, null, monolog)
* enable web interface (use Slim or Siliex with Symfony Reponse) 
* use Symfony Console
* measure code coverage

# SEE ALSO

* https://github.com/DQNEO/php-HelloWorldEnterpriseEdition
* https://github.com/EnterpriseQualityCoding/FizzBuzzEnterpriseEdition
