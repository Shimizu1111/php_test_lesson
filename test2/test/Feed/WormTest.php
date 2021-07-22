<?php

use PHPUnit\Framework\TestCase;
use Shimizu\Myapp\Feed\Worm;

class WormTest extends TestCase
{
  public function test_cray()
  {
    $worm = new Worm();
    $this->assertSame("yamete-", $worm->cry());
  }
}