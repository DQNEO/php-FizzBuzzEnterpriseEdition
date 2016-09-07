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
        $output = new BufferedOutput;
        $logic = new FizzBuzzLogic(new IntegerValue(1), new IntegerValue(1));
        $fb = new FizzBuzzApplication($logic, $output);
        $this->assertInstanceOf("DQNEO\\FizzBuzzEnterpriseEdition\\Application\\FizzBuzzApplication", $fb);
    }

    public function testRun1()
    {
        $output = new BufferedOutput;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));
        $fb = new FizzBuzzApplication($logic, $output);
        $fb->run(new RangeIterator(new IntegerValue(1), new IntegerValue(1)));
        $this->assertEquals("1\n", $output->fetch());
    }

    public function testRun2()
    {
        $output = new BufferedOutput;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));
        $fb = new FizzBuzzApplication($logic, $output);
        $fb->run(new RangeIterator(new IntegerValue(1), new IntegerValue(2)));
        $this->assertEquals("1\n2\n", $output->fetch());
    }

    public function testRun3()
    {
        $output = new BufferedOutput;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));
        $fb = new FizzBuzzApplication($logic, $output);
        $fb->run(new RangeIterator(new IntegerValue(1), new IntegerValue(3)));
        $this->assertEquals("1\n2\nFizz\n", $output->fetch());
    }


    public function testRun16()
    {
        $output = new BufferedOutput;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));
        $fb = new FizzBuzzApplication($logic, $output);
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
        $this->assertEquals($expected, $output->fetch());
    }
}
