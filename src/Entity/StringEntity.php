<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\String;

abstract class StringEntity extends AbstractEntity
{
    public function __construct()
    {
        $this->object = new String($this->value);
    }

    public function __toString()
    {
        return (string)$this->object->getValue();
    }
}

