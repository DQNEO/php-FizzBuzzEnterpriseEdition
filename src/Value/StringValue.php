<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Value;

class StringValue
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
