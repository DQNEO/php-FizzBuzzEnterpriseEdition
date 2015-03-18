<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\String;

class StdoutWriter implements WriterInterface
{
    public function write($string)
    {
        fwrite(STDOUT, $string);
    }

    public function writeln($string)
    {
        fwrite(STDOUT, $string . String::NEW_LINE);
    }
}
