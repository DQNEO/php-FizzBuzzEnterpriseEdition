<?php
/**
 * Created by PhpStorm.
 * User: DQNEO
 * Date: 2016/09/02
 * Time: 22:26
 */

namespace DQNEO\FizzBuzzEnterpriseEdition\Value;

class StringValueTest extends \PHPUnit_Framework_TestCase
{
    public function testStringValue()
    {
        $obj1 = new StringValue('hello');
        $this->assertEquals('hello', $obj1->getValue());

        $obj2 = new StringValue(' world');
        $this->assertEquals(' world', $obj2->getValue());
    }
}
