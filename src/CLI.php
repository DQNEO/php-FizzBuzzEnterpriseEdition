<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\Application\FizzBuzzApplication;
use DQNEO\FizzBuzzEnterpriseEdition\Logic\FizzBuzzLogic;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\StdoutWriter;
use DQNEO\FizzBuzzEnterpriseEdition\Value\IntegerValue;

class CLI
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
        $range = RangeIteratorFactory::factory(1, (int)$argv[1]);
        $fizzbuzz->run($range);

        return 0;
    }
}
