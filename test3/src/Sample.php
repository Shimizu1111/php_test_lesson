<?php

namespace Vagrant\Test3;

class Sample
{
  // $a + $b を返す
  public function Add($a, $b)
  {
    return $a + $b;
  }

  // $a - $b を返す、しかし-を+にしてしまっている、バグ、ここでエラーが出るようにする
  public function Sub($a, $b)
  {
    return $a + $b;
  }
}