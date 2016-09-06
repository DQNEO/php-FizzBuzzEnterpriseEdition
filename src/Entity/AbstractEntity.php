<?php
declare (strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

use DQNEO\FizzBuzzEnterpriseEdition\Value\StringValue;

abstract class AbstractEntity
{
    /** @var object */
    protected $object;

    public function getStringValue(): StringValue
    {
        $string = (string) $this->object->getValue();
        return new StringValue($string);
    }
}
