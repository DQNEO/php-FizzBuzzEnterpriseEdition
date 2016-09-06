<?php
declare (strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;

use DQNEO\FizzBuzzEnterpriseEdition\Value\StringValue;

class StderrWriter implements WriterInterface
{
    public function write(StringValue $string)
    {
        fwrite(STDERR, $string);
    }

    public function writeln(StringValue $string)
    {
        fwrite(STDERR, $string . StringValue::NEW_LINE);
    }
}
