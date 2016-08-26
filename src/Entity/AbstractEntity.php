<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

abstract class AbstractEntity
{
    /** @var object */
    protected $object;

    public function __toString(): string
    {
        return (string) $this->object->getValue();
    }
}
