<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Value;

/**
 * Created by PhpStorm.
 * User: DQNEO
 * Date: 2016/09/02
 * Time: 22:19
 */
class IntegerValueTest extends \PHPUnit_Framework_TestCase
{
    public function testIntegerValue()
    {
        $obj1 = new IntegerValue(1);
        $this->assertEquals(1, $obj1->getValue());

        $obj2 = new IntegerValue(2);
        $this->assertEquals(2, $obj2->getValue());
    }

    public function testMultiply()
    {
        $obj1 = new IntegerValue(3);
        $this->assertEquals(3, $obj1->getValue());

        $obj2 = $obj1->multiply(new IntegerValue(4));
        $this->assertEquals(12, $obj2->getValue());
    }
}
