<?php
/**
 * Created by PhpStorm.
 * User: Jules
 * Date: 30.09.2018
 * Time: 00:14
 */

namespace App\Controller;

use App\GreetingGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/hello/{name}")
     */

    public function index($name, LoggerInterface $logger, GreetingGenerator $generator)
    {
        $greeting = $generator->getRandomGreeting();

        $logger->info("$greeting $name!");

        return $this->render('default/index.html.twig', ['name' => $name]);

    }
    /**
     * @Route("/yay")
     */

    public function yay()
    {
        return new Response("Yaaay");
    }

    /**
     * @Route("/api/hello/{name}")
     */
    public function apiExample($name)
    {
        return $this->json([
            'name' => $name,
            'symfony' => 'rocks',
        ]);
    }
}