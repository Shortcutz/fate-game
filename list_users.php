<?php

require_once "bootstrap.php";

$userRepository = $entityManager->getRepository('Users');
$users = $userRepository->findAll();

foreach ($users as $user) {
    echo sprintf("-%s\n", $user->getName());
}