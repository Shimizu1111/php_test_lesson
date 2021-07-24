<?php

require_once(dirname(__FILE__, 2) . "/src/Calculator.php");

class CalculatorTest extends \PHPUnit\Framework\TestCase {
  public function testAdd()
  {
    $cal = new Caulculator();
    $result = $cal->add(2, 2);
    $expected = 4;
    $this->assertEquals($expected, $result, "message");
    $this->assertEquals(6, $cal->add(4, 2), "message");
  }
}