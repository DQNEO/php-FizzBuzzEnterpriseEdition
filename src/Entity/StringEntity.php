<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\String;

abstract class StringEntity extends AbstractEntity
{
    public function __construct()
    {
        $this->object = new String($this->value);
    }

    // singleton
    public static function getInstance()
    {
        static $obj = null;
        return $obj ?: $obj = new static;
    }
}

