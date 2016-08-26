<?php
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\FizzBuzzApplication;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\StdoutWriter;
use DQNEO\FizzBuzzEnterpriseEdition\RangeIteratorFactory;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\IntegerValue;

class CLI
{
    public static function main(int $argc, array $argv): int
    {
        if ($argc <= 1) {
            echo("invalid argument\n");
            return 1;
        }

        $writer = new StdoutWriter;
        $fizzbuzz = new FizzBuzzApplication(new IntegerValue(3), new IntegerValue(5), $writer);
        $range = RangeIteratorFactory::factory(1, $argv[1]);
        $fizzbuzz->run($range);

        return 0;
    }
}
