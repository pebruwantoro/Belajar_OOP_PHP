<?php

require_once "data/Student.php";

$student1 = new Student("Albert Einstein", "New York City" );
$student1->name = "Student 1";
$student1->student_id = "000001";
$student1->address = "Nganjuk";
$student1->country = "USA";
$student1->phone_number = "081111111111";

// var_dump($student1);
echo "Name : $student1->name" . PHP_EOL;
echo "Student ID : $student1->student_id" . PHP_EOL;
echo "Address : $student1->address" . PHP_EOL;
echo "Country : $student1->country" . PHP_EOL;
echo "Phone Number : $student1->phone_number" . PHP_EOL;

$student2 = new Student("Gallileo Galilei", "Milan" );
$student2->name = "Student 2";
$student2->student_id = "000002";
$student2->address = "Nganjuk";
$student2->country = "Italy";
$student2->phone_number = "0822222222";

// var_dump($student2);
echo "Name : $student2->name" . PHP_EOL;
echo "Student ID : $student2->student_id" . PHP_EOL;
echo "Address : $student2->address" . PHP_EOL;
echo "Country : $student2->country" . PHP_EOL;
echo "Phone Number : $student2->phone_number" . PHP_EOL;

// error
$student3 = new Student("Cristiano Ronaldo", "Milan");
$student3->name = "Student 3";
$student3->student_id = "000002";
$student3->address = "Nganjuk";
$student3->country = "Italy";
$student3->phone_number = "0822222222";

// var_dump($student3);
echo "Name : $student3->name" . PHP_EOL;
echo "Student ID : $student3->student_id" . PHP_EOL;
echo "Address : $student3->address" . PHP_EOL;
echo "Country : $student3->country" . PHP_EOL;
echo "Phone Number : $student3->phone_number" . PHP_EOL;

$student4 = new Student("David", null);
$student4->name = "David";
$student4->Greetings("Antony");
$student4->Greetings("");