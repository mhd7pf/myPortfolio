<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function indexAction(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/portfolio', name: 'portfolio')]
    public function portfolio(): Response
    {
        return $this->render('autres/portfolio.html.twig');
    }

    #[Route('/formulaire', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('autres/formulaire.html.twig');
    }

    #[Route('/apropos', name: 'about')]
    public function apropos(): Response
    {
        return $this->render('autres/apropos.html.twig');
    }

    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('autres/cv.html.twig');
    }

}