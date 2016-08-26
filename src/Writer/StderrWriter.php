<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;

use DQNEO\FizzBuzzEnterpriseEdition\Entity\AbstractEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Value\StringValue;

class StderrWriter implements WriterInterface
{
    public function write(AbstractEntity $string)
    {
        fwrite(STDERR, $string);
    }

    public function writeln(AbstractEntity $string)
    {
        fwrite(STDERR, $string . StringValue::NEW_LINE);
    }
}
