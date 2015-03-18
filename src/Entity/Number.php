<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

use DQNEO\FizzBuzzEnterpriseEdition\DataType\Integer;

class Number extends AbstractEntity
{

    /**
     * @param Integer $object
     */
    public function __construct(Integer $object)
    {
        $this->object = $object;
    }
}
