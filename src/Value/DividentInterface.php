<?php

namespace DQNEO\FizzBuzzEnterpriseEdition\Value;

interface DividentInterface
{
    public function isDivisible(IntegerValue $divisor): bool;
}
