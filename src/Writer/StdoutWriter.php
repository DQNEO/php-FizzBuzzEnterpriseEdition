<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;

use DQNEO\FizzBuzzEnterpriseEdition\Entity\AbstractEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Value\StringValue;

class StdoutWriter implements WriterInterface
{
    public function write(AbstractEntity $string)
    {
        fwrite(STDOUT, $string);
    }

    public function writeln(AbstractEntity $string)
    {
        fwrite(STDOUT, $string . StringValue::NEW_LINE);
    }
}
