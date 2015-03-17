<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

abstract class AbstractEntity
{
    protected $value;

    public function __toString()
    {
        return (string)$this->object->getValue();
    }
}

