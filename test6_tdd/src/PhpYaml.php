<?php
require(dirname(__FILE__, 2) . "/vendor/autoload.php");
use Symfony\Component\Yaml\Yaml;

$input2 = '{foo: "bar"}';
//$result = Yaml::parse("foo: bar");
$result2 = Yaml::parse($input2);
var_dump($result2);


// 外部ファイルのyamlを読み込む
$input = file_get_contents(dirname(__FILE__, 2) . "/yaml/test.yml");
$result = Yaml::parse($input);
var_dump($result);
var_dump($result["items"]["item1"]);