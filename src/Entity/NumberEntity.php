<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

use DQNEO\FizzBuzzEnterpriseEdition\DataType\IntegerEntity;

class NumberEntity extends AbstractEntity
{

    /**
     * @param Integer $object
     */
    public function __construct(IntegerEntity $object)
    {
        $this->object = $object;
    }
}
