<?php
/**
 * Created by PhpStorm.
 * User: DQNEO
 * Date: 2016/09/02
 * Time: 22:53
 */

namespace DQNEO\FizzBuzzEnterpriseEdition\Logic;

use DQNEO\FizzBuzzEnterpriseEdition\Entity\AbstractEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Value\DividentInterface;

interface FizzBuzzLogicInterface
{
    public function calculate(DividentInterface $divident): AbstractEntity;
}
