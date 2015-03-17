<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\Integer;

class Number extends AbstractEntity
{
    public function __construct($value)
    {
        $this->value = $value;
    }

}

