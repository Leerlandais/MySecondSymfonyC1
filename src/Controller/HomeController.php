<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'title' => 'Home Page',
        ]);
    }
    #[Route('/about', name: 'about')]
    public function aboutMe(): Response
    {
        return $this->render('home/about.html.twig', [
            'title' => 'About Me',
        ]);
    }
}
