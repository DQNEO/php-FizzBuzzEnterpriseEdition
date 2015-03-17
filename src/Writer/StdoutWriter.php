<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;
namespace DQNEO\FizzBuzzEnterpriseEdition\DataType\String;

class StdoutWriter implements WriterInterface
{
    public function write($string)
    {
        echo $string;
    }

    public function writeln($string)
    {
        echo $string . String::NEW_LINE;
    }
}
