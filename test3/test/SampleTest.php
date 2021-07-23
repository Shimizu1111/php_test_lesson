<?php

use PHPUnit\Framework\TestCase;
use Vagrant\Test3\Sample;

//テストコマンドの使い方
// グループ化されたテストのみを実行する
    // vendor/bin/phpunit test --group shimizu
// 全部のテストを実行する
    // vendor/bin/phpunit test 


class SampleTest extends TestCase
{
  /**
   * @group dev
   * @author shimizu
   * @test
   */
  public function add()
  {
    $sample = new Sample();
    $this->assertEquals(10, $sample->Add(4, 6));
  }

  /**
   * @group dev
   * @author shimizu
   * @test
   */
  public function sub()
  {
    $sample = new Sample();
    $this->assertEquals(1, $sample->Sub(7, 6), "致命的なエラーですよ。");
  }

  /**
   * @author shimizu
   */
  public function test_sub2()
  {
    $sample = new Sample();
    $this->assertEquals(1, $sample->Sub(7, 6), "致命的なエラーですよ。");
  }

  /**
   * @afterClass
   * @author shimizu
   */
  public function hello()
  {
    var_dump("hello");
  }
}