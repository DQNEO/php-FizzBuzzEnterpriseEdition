<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Value;

class IntegerValue
{
    protected $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function multiply(IntegerValue $n): IntegerValue
    {
        return new self($this->value * $n->getValue());
    }
}
