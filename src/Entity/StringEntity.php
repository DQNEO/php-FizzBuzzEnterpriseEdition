<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

abstract class StringEntity extends AbstractEntity
{
    public function __toString()
    {
        return (string)$this->value;
    }
}

