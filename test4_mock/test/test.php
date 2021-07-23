<?php
use PHPUnit\Framework\TestCase;
use Vagrant\Test4Mock\Foo;

class FooTest extends TestCase{

  /** 
   * @test
  */
  public function test_mock () {
      $target = new Foo();

      // 実際のソースを使ってテストする
      $result = $target->functionA();
      $this->assertEquals('hoge', $result);

      $result = $target->functionB();
      $this->assertSame('fuga', $result);
  }
}
