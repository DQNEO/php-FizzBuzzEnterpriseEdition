<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\DataType;

class String
{
    const NEW_LINE = "\n";

    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
