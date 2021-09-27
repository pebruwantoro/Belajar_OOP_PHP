<?php

namespace {

require_once "data/Conflict.php";
require_once "data/Helper.php";
// name space is the place to save the classes

$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();

// var_dump($conflict1);
// var_dump($conflict2);

echo Helper\APPLICATION . PHP_EOL;
Helper\help_me();

}