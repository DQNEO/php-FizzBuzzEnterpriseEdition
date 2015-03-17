<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\Integer;

class Number extends AbstractEntity
{
    public function __construct($value)
    {
        $this->value = new Integer($value);
    }

    public function __toString()
    {
        return (string)$this->value->getValue();
    }

}

