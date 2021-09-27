<?php

require_once "data/Conflict.php";
require_once "data/helper.php";

use Data\One\Conflict;
use function Helper\help_me;
use const Helper\APPLICATION;

$conflict = new Conflict();
var_dump($conflict);

help_me();

echo APPLICATION . PHP_EOL;