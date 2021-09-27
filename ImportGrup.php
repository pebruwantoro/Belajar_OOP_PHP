<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Sample as Sample, Dummy as Dummy};
use function Helper\{help_me as HELP};

$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();

var_dump($conflict);
var_dump($dummy);
var_dump($sample);