<?php
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\FizzBuzzRunner;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\StdoutWriter;
use DQNEO\FizzBuzzEnterpriseEdition\RangeIteratorFactory;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\Integer;

class CLI
{
    /**
     * CLI entry point
     *
     * @param integer $argc num of arguments
     * @param array   $argv list of arguments
     */
    public static function main($argc, $argv)
    {
        $writer = new StdoutWriter;
        $fizzbuzz = new FizzBuzzRunner(new Integer(3), new Integer(5), $writer);

        if ($argc <= 1) {
            echo("invalid argument\n");
            exit;
        }

        $range = RangeIteratorFactory::factory(1, $argv[1]);
        $fizzbuzz->run($range);

        return 0;
    }
}
