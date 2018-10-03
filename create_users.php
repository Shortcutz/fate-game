<?php

require_once "bootstrap.php";

$newUserName = $argv[1];

$user = new \App\User();
$user->setName($newUserName);

$entityManager->persist($user);
$entityManager->flush();

echo "Created User with ID " . $user->getId() . "\n";
