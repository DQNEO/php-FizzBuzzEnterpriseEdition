<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;

use DQNEO\FizzBuzzEnterpriseEdition\Value\StringValue;

interface WriterInterface
{
    public function write(StringValue $string);

    public function writeln(StringValue $string);
}
