<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        $title = "Ceci est ma page home";
        $age = 22;
        $john = "Home";
        return $this->render('home/index.html.twig', [
            'myTitle' => $title, 
            'myAge' => $age,
            'myJohn' => $john,
            'controller_name' => 'HomeController',
        ]);
    }
}
