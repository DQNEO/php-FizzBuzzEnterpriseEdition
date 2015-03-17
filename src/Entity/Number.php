<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\Integer;

class Number extends AbstractEntity
{
    public function __construct(Integer $value)
    {
        $this->value = $value;
    }

    public function __toString()
    {
        return (string)$this->value->getValue();
    }

}

