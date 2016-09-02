<?php
/**
 * Created by PhpStorm.
 * User: DQNEO
 * Date: 2016/09/02
 * Time: 23:03
 */

namespace DQNEO\FizzBuzzEnterpriseEdition\Application;


use DQNEO\FizzBuzzEnterpriseEdition\RangeIterator;

interface Runnable
{
    public function run(RangeIterator $range);
}