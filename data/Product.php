<?php

class Product
{
	protected string $name;
	protected int $price;

	public function __construct(string $name, int $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	public function getName(): string 
	{
		return $this->name;
	}

	public function getPrice(): int 
	{
		return $this->price;
	}
}

class ProductDummy extends Product
{
	public function info() {
		echo "The Product Name is $this->name" .PHP_EOL;
		echo "The Product Price is $this->price" .PHP_EOL;
	}
}