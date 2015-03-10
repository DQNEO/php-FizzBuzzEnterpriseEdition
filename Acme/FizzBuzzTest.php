<?php
require_once __DIR__ . '/FizzBuzz.php';
use Acme\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testNew()
    {
        $fb = new FizzBuzz(1,1,1);
        $this->assertInstanceOf("Acme\\FizzBuzz", $fb);
    }

    public function testRun1()
    {
        $fb = new FizzBuzz(1,3,5);
        $fb->run(1);
        $this->assertEquals("1\n", $fb->buf);
    }

    public function testRun2()
    {
        $fb = new FizzBuzz(1,3,5);
        $fb->run(2);
        $this->assertEquals("1\n2\n", $fb->buf);
    }

    public function testRun3()
    {
        $fb = new FizzBuzz(1,3,5);
        $fb->run(3);
        $this->assertEquals("1\n2\nFizz\n", $fb->buf);
    }

}
