<?php

class Programmer
{
	public string $name;

	public function __constructor(string $name)
	{
		$this->name = $name;
	}

}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{
	
}

class Company
{
	public Programmer $programmer;
}