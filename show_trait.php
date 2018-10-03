<?php
// show_trait.php <id>
require_once "bootstrap.php";

$id = $argv[1];
$trait = $entityManager->find('Traits', $id);

if ($trait === null) {
    echo "No Trait found.\n";
    exit(1);
}

echo sprintf("-%s\n", $trait->getTitle());