#!/usr/bin/env php
<?php
require_once __DIR__ . '/../autoload.php';
use Acme\FizzBuzz\FizzBuzzRunner;
use Acme\FizzBuzz\Writer;

$writer = new Writer;
$fizzbuzz = new FizzBuzzRunner(3, 5, $writer);

$fizzbuzz->run(1, $argv[1]);
