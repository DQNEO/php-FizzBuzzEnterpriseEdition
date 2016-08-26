<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;

use DQNEO\FizzBuzzEnterpriseEdition\Entity\AbstractEntity;

interface WriterInterface
{
    public function write(AbstractEntity $string);

    public function writeln(AbstractEntity $string);
}
