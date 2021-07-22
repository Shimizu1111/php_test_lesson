<?php

use PHPUnit\Framework\TestCase;
use Shimizu\Myapp2\Chick2;
use Shimizu\Myapp2\Feed\Worm as FeedWorm;
use Shimizu\Myapp\Chick;
use Shimizu\Myapp\Feed\Worm;

class ChickTest extends TestCase
{
  public function test_eat()
  {
    $chick = new Chick();
    $chick->eat(new Worm());
    $this->assertSame(1, $chick->getEatCount());
    $chick->eat(new Worm());
    $this->assertSame(2, $chick->getEatCount());
  }
}

class ChickTest2 extends TestCase
{
  public function test_eat()
  {
    $chick = new Chick2;
    $chick->eat(new FeedWorm());
    $this->assertSame(1, $chick->getEatCount());
    $chick->eat(new FeedWorm());
    $this->assertSame(2, $chick->getEatCount());
  }
}