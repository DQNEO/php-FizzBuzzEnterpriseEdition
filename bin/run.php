#!/usr/bin/env php
<?php
require_once __DIR__ . '/../autoload.php';
use DQNEO\FizzBuzzEnterpriseEdition\FizzBuzzRunner;
use DQNEO\FizzBuzzEnterpriseEdition\Writer;
use DQNEO\FizzBuzzEnterpriseEdition\RangeIteratorFactory;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\Integer;

$writer = new Writer;
$fizzbuzz = new FizzBuzzRunner(new Integer(3), new Integer(5), $writer);

if ($argc <= 1) {
    echo("invalid argument\n");
    exit;
}

$range = RangeIteratorFactory::factory(1, $argv[1]);
$fizzbuzz->run($range);
