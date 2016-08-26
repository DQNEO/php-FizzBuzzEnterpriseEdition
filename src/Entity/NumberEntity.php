<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

use DQNEO\FizzBuzzEnterpriseEdition\DataType\IntegerValue;

class NumberEntity extends AbstractEntity
{
    /**
     * @param Integer $object
     */
    public function __construct(IntegerValue $object)
    {
        $this->object = $object;
    }
}
