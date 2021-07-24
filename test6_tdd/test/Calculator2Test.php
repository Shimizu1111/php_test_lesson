<?php

require_once (dirname(__FILE__, 2) . "/src/Calculator2.php");

class Calculator2Test extends \PHPUnit\Framework\TestCase
{
  public function setUp(): void
  {
    $this->cal = new Calculator2();
  }

  /**
   * @group shimizu
   */
  public function testAdd()
  {
    $this->assertSame(4, $this->cal->add(2, 2));
    $this->assertSame(8, $this->cal->add(3, 5));
  }
}