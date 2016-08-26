<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

use DQNEO\FizzBuzzEnterpriseEdition\Value\IntegerValue;

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
