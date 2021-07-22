<?php
namespace Shimizu\Myapp2;

use Shimizu\Myapp2\Feed\Worm;

class Chick2
{
  private $eatCount = 0;
  public function eat(Worm $worm)
  {
    $this->eatCount++;
  }
  public function getEatCount()
  {
    return $this->eatCount;
  }
}