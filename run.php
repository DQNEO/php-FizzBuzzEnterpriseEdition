#!/usr/bin/env php
<?php
use Acme\FizzBuzz;

$fizzbuzz = new FizzBuzz(1, 3, 5);
$fizzbuzz->run($argv[1]);
