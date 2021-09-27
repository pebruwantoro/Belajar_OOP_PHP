<?php

require_once "data/Student.php";

$student = new Student();
$student->name = "Albert";
$student->Greetings("Budi");
$joko = new Student();
$joko->name = "Joko";
$joko->Greetings("Riski");
$joko->Info();