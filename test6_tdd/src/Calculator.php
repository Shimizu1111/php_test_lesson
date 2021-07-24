<?php

require dirname(__FILE__, 2) . "/vendor/autoload.php";
use Vagrant\Test6Tdd\App\Consts;


class Caulculator
{
  public function add($x, $y)
  {
    return $x + $y;
  }
}

var_dump("hello");

//var_dump(Vagrant\Test6Tdd\App\Consts\TestConsts::names);

foreach (Consts\TestConsts::NAMES2 as $name => $number) {
  var_dump($name . "=" . $number);
}
