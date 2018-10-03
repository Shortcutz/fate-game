<?php
// update_trait.php <id> <new-title> <new-description>
require_once "bootstrap.php";

$id = $argv[1];
$newTitle = $argv[2];
$newDescription = $argv[3];

$trait = $entityManager->find('Traits', $id);

if ($trait === null) {
    echo "Trait mit ID $id existiert nicht.\n";
    exit(1);
}

$trait->setTitle($newTitle);

$entityManager->flush();