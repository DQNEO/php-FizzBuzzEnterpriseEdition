<?php
use DQNEO\FizzBuzzEnterpriseEdition\FizzBuzzRunner;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\WriterInterface;
use DQNEO\FizzBuzzEnterpriseEdition\RangeIterator;
use DQNEO\FizzBuzzEnterpriseEdition\RangeIteratorFactory;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\Integer;

class MockWriter implements WriterInterface
{
    public $buf = "";

    public function write($string)
    {
        $this->buf .= $string;
    }

}
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    public function testNew()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzzRunner(new Integer(1), new Integer(1), $writer);
        $this->assertInstanceOf("DQNEO\\FizzBuzzEnterpriseEdition\\FizzBuzzRunner", $fb);
    }

    public function testRun1()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzzRunner(new Integer(3), new Integer(5), $writer);
        $fb->run(RangeIteratorFactory::factory(1,1));
        $this->assertEquals("1\n", $writer->buf);
    }

    public function testRun2()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzzRunner(new Integer(3), new Integer(5), $writer);
        $fb->run(RangeIteratorFactory::factory(1,2));
        $this->assertEquals("1\n2\n", $writer->buf);
    }

    public function testRun3()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzzRunner(new Integer(3), new Integer(5), $writer);
        $fb->run(RangeIteratorFactory::factory(1,3));
        $this->assertEquals("1\n2\nFizz\n", $writer->buf);
    }


    public function testRun16()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzzRunner(new Integer(3), new Integer(5), $writer);
        $fb->run(RangeIteratorFactory::factory(1,16));

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
