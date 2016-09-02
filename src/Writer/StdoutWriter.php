<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;

use DQNEO\FizzBuzzEnterpriseEdition\Value\StringValue;

class StdoutWriter implements WriterInterface
{
    public function write(StringValue $string)
    {
        fwrite(STDOUT, $string);
    }

    public function writeln(StringValue $string)
    {
        fwrite(STDOUT, $string . StringValue::NEW_LINE);
    }
}
