<?php
declare (strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

use DQNEO\FizzBuzzEnterpriseEdition\Value\StringValue;

abstract class AbstractStringEntity extends AbstractEntity
{
    /** @var string */
    protected $value;

    public function __construct()
    {
        $this->object = new StringValue($this->value);
    }

    public static function getInstance(): AbstractStringEntity
    {
        static $obj = null;
        return $obj ?: $obj = new static;
    }
}
