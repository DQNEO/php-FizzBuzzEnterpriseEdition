<?php
declare (strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\Application\FizzBuzzApplication;
use DQNEO\FizzBuzzEnterpriseEdition\Logic\FizzBuzzLogic;
use DQNEO\FizzBuzzEnterpriseEdition\Range\RangeIterator;
use DQNEO\FizzBuzzEnterpriseEdition\Value\IntegerValue;
use Symfony\Component\Console\Output\BufferedOutput;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testNew()
    {
        $writer = new BufferedOutput;
        $logic = new FizzBuzzLogic(new IntegerValue(1), new IntegerValue(1));
        $fb = new FizzBuzzApplication($logic, $writer);
        $this->assertInstanceOf("DQNEO\\FizzBuzzEnterpriseEdition\\Application\\FizzBuzzApplication", $fb);
    }

    public function testRun1()
    {
        $writer = new BufferedOutput;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));
        $fb = new FizzBuzzApplication($logic, $writer);
        $fb->run(new RangeIterator(new IntegerValue(1), new IntegerValue(1)));
        $this->assertEquals("1\n", $writer->fetch());
    }

    public function testRun2()
    {
        $writer = new BufferedOutput;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));
        $fb = new FizzBuzzApplication($logic, $writer);
        $fb->run(new RangeIterator(new IntegerValue(1), new IntegerValue(2)));
        $this->assertEquals("1\n2\n", $writer->fetch());
    }

    public function testRun3()
    {
        $writer = new BufferedOutput;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));
        $fb = new FizzBuzzApplication($logic, $writer);
        $fb->run(new RangeIterator(new IntegerValue(1), new IntegerValue(3)));
        $this->assertEquals("1\n2\nFizz\n", $writer->fetch());
    }


    public function testRun16()
    {
        $writer = new BufferedOutput;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));
        $fb = new FizzBuzzApplication($logic, $writer);
        $fb->run(new RangeIterator(new IntegerValue(1), new IntegerValue(16)));

        $expected ="1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
";
        $this->assertEquals($expected, $writer->fetch());
    }
}
