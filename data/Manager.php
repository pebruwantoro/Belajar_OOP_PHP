<?php

class Manager 
{

	var string $name;
	var string $title;
	
	public function __construct(string $name ="", string $title ="Manager")
	{
		$this->name = $name;
		$this->title = $title;
	}

	function say_hello(string $name)
	{
		echo "Hi $name, my name is manager $this->name" .PHP_EOL;
	}
}

class ViceManager extends Manager 
{
	public function __construct(string $name ="")
	{
		// tidak wajib tapi direkomendasikan
		parent::__construct($name, "VP");
	}

	function say_hello(string $name)
	{
		echo "Assalamualaikum $name, nami kulo $this->name" .PHP_EOL;
	}
}