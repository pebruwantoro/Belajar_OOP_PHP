<?php

require_once "data/manager.php";
// Inheritance adalah kemampuan untuk menurunkan sebuah
// kelas ke kelas lainnya. Parent class dan Child class
// Class child hanya bisa memiliki satu class parent, tapi satu 
// class parent bisa memilikibanyak class child
// semua properties yg dimiliki class parent akan diturunkan ke class child

$manager = new Manager();
$manager->name = "Nadim";
$manager->say_hello("Doni");

$vice_manager = new ViceManager();
$vice_manager->name = "Nadim";
$vice_manager->say_hello("Alex");