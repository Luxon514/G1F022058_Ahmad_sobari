<?php

require_once "data/Product.php";

$product = new Product("Adamantium", 100000000);

// tampilkan product get name
// tampilkan product get price

$graphine = new ProductDummy("Graphine", 5000000);
$graphine->info();