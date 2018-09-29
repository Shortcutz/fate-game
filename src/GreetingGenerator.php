<?php
/**
 * Created by PhpStorm.
 * User: Jules
 * Date: 30.09.2018
 * Time: 01:26
 */
namespace App;

use Psr\Log\LoggerInterface;

class GreetingGenerator
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getRandomGreeting()
    {
        $greetings = ['Hey', 'Yo', 'Aloha', 'Ehehe', 'Poooow', 'Sup\'', 'Yaaaay', 'Wuh', 'Cool wie man dich kennt'];
        $greeting = $greetings[array_rand($greetings)];

        $this->logger->info('Using the greeting: '.$greeting);

        return $greeting;
    }
}