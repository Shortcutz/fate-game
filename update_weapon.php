<?php

require_once "bootstrap.php";

$id = $argv[1];
$newName = $argv[2];

$waffe = $entityManager->find('Waffen', $id);

if ($waffe === null) {
    echo "Weapon with id $id does not exist.\n";
    exit(1);
}

$waffe->setName($newName);

$entityManager->flush();