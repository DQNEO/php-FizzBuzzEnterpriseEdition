<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Value;

class StringValue
{
    const NEW_LINE = "\n";

    protected $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
