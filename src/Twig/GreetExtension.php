<?php
/**
 * Created by PhpStorm.
 * User: Jules
 * Date: 30.09.2018
 * Time: 01:37
 */

use App\GreetingGenerator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class GreetExtension extends AbstractExtension
{
    private $greetingGenerator;

    public function __construct(GreetingGenerator $greetingGenerator)
    {
        $this->greetingGenerator = $greetingGenerator;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('greet', [$this, 'greetUser']),
        ];
    }

    public function greetUser($name)
    {
        $greeting =  $this->greetingGenerator->getRandomGreeting();

        return "$greeting $name!";
    }
}