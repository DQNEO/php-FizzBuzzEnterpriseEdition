<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

abstract class StringEntity extends AbstractEntity
{
    protected $value;

    public function __construct($value = null)
    {
        if (isset($value)) {
            $this->value = $value;
        }
    }

    public function getValue()
    {
        return $this->value;
    }
}

