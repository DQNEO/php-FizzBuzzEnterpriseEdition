#!/usr/bin/env php
<?php
require_once __DIR__ . '/autoload.php';
use Acme\FizzBuzz;
use Acme\Writer;

$writer = new Writer;
$fizzbuzz = new FizzBuzz(1, 3, 5, $writer);
$fizzbuzz->run($argv[1]);
