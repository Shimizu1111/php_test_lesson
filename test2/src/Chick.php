<?php
namespace Shimizu\Myapp;

use Shimizu\Myapp\Feed\Worm;

class Chick
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