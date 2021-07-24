<?php
require(dirname(__FILE__, 2) . "/vendor/autoload.php");

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
  /** 
   * @test 
  */
  public function testAdd()
  {
    $calc = new Vagrant\Test7Yaml\Calculator();
    // 期待値をyamlでとって来る
    $input = file_get_contents(dirname(__FILE__, 2) . "/yaml/test.yml");
    $result = \Symfony\Component\Yaml\Yaml::parse($input);
    var_dump($result);
    // 期待値は4
    $this->assertSame($result["adds"]["add1"], $calc->add(2,2));
    // 期待値は6
    $this->assertSame($result["adds"]["add2"], $calc->add(4,2));
  }
}