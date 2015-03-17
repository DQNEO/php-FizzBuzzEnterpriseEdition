<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

class Number extends AbstractEntity
{
    public function __construct($value)
    {
        $this->value = $value;
    }

}

