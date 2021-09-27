<?php
/*
Constant bisa dideklarasikan di class dan menempel pada class,
sedangkan propertise meskipun dideklarasikan di class,
propertise merupakan sebuah object.


*/
class Student 
{
	const GRADE = "Senior High School Grade II";

	var string $name;
	var string $student_id;
	var ?string $address = null;
	var string $country;
	var string $phone_number;

	function __construct (string $name, ?string $address) 
	{
		$this->name = $name;
		$this->address = $address;
	}

	function __destruct()
	{
		echo "Object student $this->name is destroyed" . PHP_EOL;
	}
	
	function Greetings(?string $name) 
	{
		if (is_null($name)) {
			echo "Hello, my name is $this->name". PHP_EOL;
		} else {
			echo "Hello $name, my name is $this->name" . PHP_EOL;
		}
	}

	function Info()
	{
		// self KEYWORD untuk memanggil constant yg ada 
		// pada satu class yg sama dengan function.
		echo "Grade: " .self::GRADE . PHP_EOL;
	}
}