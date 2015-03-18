<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

abstract class AbstractEntity
{
    /** @var object */
    protected $object;

    public function __toString()
    {
        return (string) $this->object->getValue();
    }
}

