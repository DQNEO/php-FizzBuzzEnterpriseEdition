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
}
