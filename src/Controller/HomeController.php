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

    #[Route('/administrer', name: 'administrer')]
    public function administrer(): Response
    {
        return $this->render('autres/administrer.html.twig');
    }

    #[Route('/connecter', name: 'connecter')]
    public function connecter(): Response
    {
        return $this->render('autres/connecter.html.twig');
    }

    #[Route('/programmer', name: 'programmer')]
    public function programmer(): Response
    {
        return $this->render('autres/programmer.html.twig');
    }

    #[Route('/projeta1', name: 'projeta1')]
    public function projeta1(): Response
    {
        return $this->render('autres/projets/projeta1.html.twig');
    }
    

}