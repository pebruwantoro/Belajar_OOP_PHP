<?php

class Manager 
{

	var string $name;
	
	function say_hello(string $name)
	{
		echo "Hi $name, my name is manager $this->name" .PHP_EOL;
	}
}

class ViceManager extends Manager 
{
	function say_hello(string $name)
	{
		echo "Assalamualaikum $name, nami kulo $this->name" .PHP_EOL;
	}
}