<?php

require_once "data/Product.php";

// use Data\Product;

$product = new Product("Orange", 10000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice(). PHP_EOL;

$product_dummy = new ProductDummy("Apple", 1500);

echo $product_dummy->info() . PHP_EOL;