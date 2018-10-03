<?php
// list_traits.php
require_once "bootstrap.php";

$traitRepository = $entityManager->getRepository('Traits');
$traits = $traitRepository->findAll();

foreach ($traits as $trait) {
    echo sprintf("-%s\n", $trait->getTitle());
}