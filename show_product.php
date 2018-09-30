<?php
// show_product.php <id>
require_once "bootstrap.php";

$id = $argv[1];
$waffe = $entityManager->find('Waffen', $id);

if ($waffe === null) {
    echo "No weapon found.\n";
    exit(1);
}

echo sprintf("-%s\n", $waffe->getName());
