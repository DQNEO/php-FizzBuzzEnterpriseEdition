#!/usr/bin/env php
<?php
require_once __DIR__ . '/Acme/FizzBuzz.php';
require_once __DIR__ . '/Acme/Writer.php';
use Acme\FizzBuzz;

$fizzbuzz = new FizzBuzz(1, 3, 5);
$fizzbuzz->run($argv[1]);
