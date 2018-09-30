<?php
// create_product.php <name>
require_once "bootstrap.php";

$neueWaffeName = $argv[1];

$waffe = new \App\Waffen();
$waffe->setName($neueWaffeName);

$entityManager->persist($waffe);
$entityManager->flush();

echo "Created Product with ID " . $waffe->getId() . "\n";