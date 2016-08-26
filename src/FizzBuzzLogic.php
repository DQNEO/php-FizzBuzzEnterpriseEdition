<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\Entity\AbstractEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\FizzEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\BuzzEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\FizzBuzzEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\NumberEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Value\Divident;
use DQNEO\FizzBuzzEnterpriseEdition\Value\IntegerValue;


class FizzBuzzLogic
{
    /** @var Integer */
    private $firstDivisor;

    /** @var Integer */
    private $secondDivisor;

    public function __construct(IntegerValue $firstDivisor, IntegerValue $secondDivisor)
    {
        $this->firstDivisor = $firstDivisor;
        $this->secondDivisor = $secondDivisor;
    }


    /**
     * @param  Divident $divident
     * @return AbstractEntity
     */
    public function calculate(Divident $divident): AbstractEntity
    {
        if ($divident->isDivisible($this->firstDivisor->multiply($this->secondDivisor))) {
            return FizzBuzzEntity::getInstance();
        } elseif ($divident->isDivisible($this->firstDivisor)) {
            return FizzEntity::getInstance();
        } elseif ($divident->isDivisible($this->secondDivisor)) {
            return BuzzEntity::getInstance();
        } else {
            return new NumberEntity($divident);
        }
    }
}