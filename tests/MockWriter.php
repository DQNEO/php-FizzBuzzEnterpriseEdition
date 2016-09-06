<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\Value\StringValue;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\WriterInterface;

class MockWriter implements WriterInterface
{
    public $buf = "";

    public function write(StringValue $string)
    {
        $this->buf .= $string;
    }

    public function writeln(StringValue $string)
    {
        $this->buf .= $string . "\n";
    }
}