#!/usr/bin/env php
<?php
require_once __DIR__ . '/Acme/FizzBuzz.php';
use Acme\FizzBuzz;

$fizzbuzz = new FizzBuzz();
$fizzbuzz->main($argv[1]);
