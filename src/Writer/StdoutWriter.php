<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;
class StdoutWriter implements WriterInterface
{
    public function write($string)
    {
        echo $string;
    }

    public function writeln($string)
    {
        echo $string . "\n";
    }
}
