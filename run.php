#!/usr/bin/env php
<?php
require_once __DIR__ . '/Acme/FizzBuzz.php';
use Acme\FizzBuzz;

$fizzbuzz = new FizzBuzz();
$fizzbuzz->run($argv[1]);
