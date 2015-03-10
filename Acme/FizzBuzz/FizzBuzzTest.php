<?php
use Acme\FizzBuzz\FizzBuzz;
use Acme\FizzBuzz\WriterInterface;

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
        $fb = new FizzBuzz(1,1,1, $writer);
        $this->assertInstanceOf("Acme\\FizzBuzz\\FizzBuzz", $fb);
    }

    public function testRun1()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzz(1,3,5, $writer);
        $fb->run(1);
        $this->assertEquals("1\n", $writer->buf);
    }

    public function testRun2()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzz(1,3,5, $writer);
        $fb->run(2);
        $this->assertEquals("1\n2\n", $writer->buf);
    }

    public function testRun3()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzz(1,3,5, $writer);
        $fb->run(3);
        $this->assertEquals("1\n2\nFizz\n", $writer->buf);
    }


    public function testRun16()
    {
        $writer = new MockWriter;
        $fb = new FizzBuzz(1,3,5, $writer);
        $fb->run(16);

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
