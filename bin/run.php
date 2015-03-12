#!/usr/bin/env php
<?php
require_once __DIR__ . '/../autoload.php';
use Acme\FizzBuzz\FizzBuzzRunner;
use Acme\FizzBuzz\Writer;
use Acme\FizzBuzz\RangeIteratorFactory;
use Acme\FizzBuzz\DataType\Integer;

$writer = new Writer;
$fizzbuzz = new FizzBuzzRunner(new Integer(3), new Integer(5), $writer);
$range = RangeIteratorFactory::factory(1, $argv[1]);
$fizzbuzz->run($range);
