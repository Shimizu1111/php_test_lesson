<?php
require(dirname(__FILE__, 2) . "/vendor/autoload.php");
use Symfony\Component\Yaml\Yaml;

$input = file_get_contents(dirname(__FILE__, 2) . "/yaml/test.yml");
$result = Yaml::parse($input);
var_dump($result);


