#!/usr/bin/env php
<?php
require_once __DIR__ . '/../autoload.php';
use Acme\FizzBuzz\FizzBuzzRunner;
use Acme\FizzBuzz\Writer;
use Acme\FizzBuzz\RangeIterator;
use Acme\FizzBuzz\DataType\Integer;

$writer = new Writer;
$fizzbuzz = new FizzBuzzRunner(3, 5, $writer);
$min = new Integer(1);
$max = new Integer($argv[1]);
$range = new RangeIterator($min, $max);
$fizzbuzz->run($range);
