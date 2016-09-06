<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\Application\FizzBuzzApplication;
use DQNEO\FizzBuzzEnterpriseEdition\Logic\FizzBuzzLogic;
use DQNEO\FizzBuzzEnterpriseEdition\Range\RangeIteratorFactory;
use DQNEO\FizzBuzzEnterpriseEdition\Value\StringValue;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\WriterInterface;
use DQNEO\FizzBuzzEnterpriseEdition\Value\IntegerValue;

require_once __DIR__ . '/MockWriter.php';
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testNew()
    {
        $writer = new MockWriter;
        $logic = new FizzBuzzLogic(new IntegerValue(1), new IntegerValue(1));
        $fb = new FizzBuzzApplication($logic, $writer);
        $this->assertInstanceOf("DQNEO\\FizzBuzzEnterpriseEdition\\Application\\FizzBuzzApplication", $fb);
    }

    public function testRun1()
    {
        $writer = new MockWriter;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));
        $fb = new FizzBuzzApplication($logic, $writer);
        $fb->run(RangeIteratorFactory::factory(1, 1));
        $this->assertEquals("1\n", $writer->buf);
    }

    public function testRun2()
    {
        $writer = new MockWriter;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));
        $fb = new FizzBuzzApplication($logic, $writer);
        $fb->run(RangeIteratorFactory::factory(1, 2));
        $this->assertEquals("1\n2\n", $writer->buf);
    }

    public function testRun3()
    {
        $writer = new MockWriter;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));
        $fb = new FizzBuzzApplication($logic, $writer);
        $fb->run(RangeIteratorFactory::factory(1, 3));
        $this->assertEquals("1\n2\nFizz\n", $writer->buf);
    }


    public function testRun16()
    {
        $writer = new MockWriter;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));
        $fb = new FizzBuzzApplication($logic, $writer);
        $fb->run(RangeIteratorFactory::factory(1, 16));

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
        $this->assertEquals($expected, $writer->buf);
    }
}
