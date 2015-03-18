<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\String;

class StderrWriter implements WriterInterface
{
    public function write($string)
    {
        fwrite(STDERR, $string);
    }

    public function writeln($string)
    {
        fwrite(STDERR, $string . String::NEW_LINE);
    }
}
