<?php

namespace Vagrant\Test6Tdd\App\Consts;

// srcディレクトリ内のCalculator.phpの定数定義ファイル
class TestConsts
{
  public const NAME1 = 1;
  public const NAME2 = 2;

  public const NAMES = [
    "aa" => self::NAME1,
    "bb" => self::NAME2
  ];

  public const NAMES2 = [
    "リンゴ" => self::NAME1,
    "オレンジ" => self::NAME2
  ];
}