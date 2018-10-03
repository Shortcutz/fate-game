<?php
// create_traits.php <title> <description>
require_once "bootstrap.php";

$newUserName = $argv[1];

$trait = new Traits();
$trait->setTitle($newUserName);
$trait->setDescription("TestBla");

$entityManager->persist($trait);
$entityManager->flush();

echo "Created Trait with ID " . $trait->getId() . "\n";
