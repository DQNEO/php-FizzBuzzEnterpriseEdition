<?php
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\FizzBuzzApplication;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\WriterInterface;
use DQNEO\FizzBuzzEnterpriseEdition\RangeIterator;
use DQNEO\FizzBuzzEnterpriseEdition\RangeIteratorFactory;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\IntegerValue;

class MockWriter implements WriterInterface
{
    public $buf = "";

    public function write($string)
    {
        $this->buf .= $string;
    }

    public function writeln($string)
    {
        $this->buf .= $string . "\n";
    }
}
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testNew()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzzApplication(new IntegerValue(1), new IntegerValue(1), $writer);
        $this->assertInstanceOf("DQNEO\\FizzBuzzEnterpriseEdition\\FizzBuzzApplication", $fb);
    }

    public function testRun1()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzzApplication(new IntegerValue(3), new IntegerValue(5), $writer);
        $fb->run(RangeIteratorFactory::factory(1, 1));
        $this->assertEquals("1\n", $writer->buf);
    }

    public function testRun2()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzzApplication(new IntegerValue(3), new IntegerValue(5), $writer);
        $fb->run(RangeIteratorFactory::factory(1, 2));
        $this->assertEquals("1\n2\n", $writer->buf);
    }

    public function testRun3()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzzApplication(new IntegerValue(3), new IntegerValue(5), $writer);
        $fb->run(RangeIteratorFactory::factory(1, 3));
        $this->assertEquals("1\n2\nFizz\n", $writer->buf);
    }


    public function testRun16()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzzApplication(new IntegerValue(3), new IntegerValue(5), $writer);
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
