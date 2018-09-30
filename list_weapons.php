<?php
/**
 * Created by PhpStorm.
 * User: Jules
 * Date: 30.09.2018
 * Time: 14:58
 */

require_once "bootstrap.php";

$waffenRepository = $entityManager->getRepository('Waffen');
$waffen = $waffenRepository->findAll();

foreach ($waffen as $waffe) {
    echo sprintf("-%s\n", $waffe->getName());
}