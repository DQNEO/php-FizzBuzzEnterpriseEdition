<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Console;

use DQNEO\FizzBuzzEnterpriseEdition\Application\FizzBuzzApplication;
use DQNEO\FizzBuzzEnterpriseEdition\Logic\FizzBuzzLogic;
use DQNEO\FizzBuzzEnterpriseEdition\Range\RangeIterator;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\StdoutWriter;
use DQNEO\FizzBuzzEnterpriseEdition\Value\IntegerValue;

class Command
{
    public static function main(int $argc, array $argv): int
    {
        if ($argc <= 1) {
            echo("invalid argument\n");
            return 1;
        }

        $writer = new StdoutWriter;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));

        $fizzbuzz = new FizzBuzzApplication($logic, $writer);
        $rangeIterator = new RangeIterator(new IntegerValue(1), new IntegerValue((int)$argv[1]));
        $fizzbuzz->run($rangeIterator);

        return 0;
    }
}
