<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\Integer;

class Number extends AbstractEntity
{
    public function __construct(Integer $object)
    {
        $this->object = $object;
    }

    public function __toString()
    {
        return (string)$this->object->getValue();
    }

}

