<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("David");
var_dump($company);
$company->programmer = new BackendProgrammer("David");
var_dump($company);
$company->programmer = new FrontendProgrammer("David");
var_dump($company);

say_hello_programmer(new Programmer("Iwan"));
say_hello_programmer(new BackendProgrammer("Iwan"));
say_hello_programmer(new FrontendProgrammer("Iwan"));