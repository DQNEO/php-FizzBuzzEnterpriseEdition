<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

use DQNEO\FizzBuzzEnterpriseEdition\DataType\String;

abstract class StringEntity extends AbstractEntity
{
    /** @var string */
    protected $value;

    public function __construct()
    {
        $this->object = new String($this->value);
    }

    /**
     * @return StringEntity
     */
    public static function getInstance()
    {
        static $obj = null;
        return $obj ?: $obj = new static;
    }
}
