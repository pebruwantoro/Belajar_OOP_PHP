<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Alex";
$manager->say_hello("Budi");

$vp = new ViceManager();
$vp->name = "Alexis";
$vp->say_hello("Joko");