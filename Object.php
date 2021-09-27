<?php

require_once "data/Student.php";

$student1 = new Student("Natalia", "Jakarta");
var_dump($student1);

$student2 = new Student("Harith", null);
var_dump($student2);