<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;

use DQNEO\FizzBuzzEnterpriseEdition\DataType\StringValue;

class StdoutWriter implements WriterInterface
{
    public function write($string)
    {
        fwrite(STDOUT, $string);
    }

    public function writeln($string)
    {
        fwrite(STDOUT, $string . StringValue::NEW_LINE);
    }
}
