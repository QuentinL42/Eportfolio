<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    // Default route
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    // French routes
    #[Route('/blog/fr/home', name: 'app_blog_home')]
    public function home(): Response
    {
        return $this->render('blog/fr/home.html.twig');
    }
    #[Route('/blog/fr/information', name: 'app_blog_information')]
    public function info(): Response
    {
        return $this->render('blog/fr/information.html.twig');
    }
    #[Route('/blog/fr/CV', name: 'app_blog_CV')]
    public function CV(): Response
    {
        return $this->render('blog/fr/CV.html.twig');
    }
    #[Route('/blog/fr/Eportfolio', name: 'app_blog_EP')]
    public function EP(): Response
    {
        return $this->render('blog/fr/Eportfolio.html.twig');
    }
    
    // English routes
    #[Route('/blog/en/enhome', name: 'app_blog_enhome')]
    public function enhome(): Response
    {
        return $this->render('blog/en/enhome.html.twig');
    }
    #[Route('/blog/en/eninformation', name: 'app_blog_eninformation')]
    public function eninfo(): Response
    {
        return $this->render('blog/en/eninformation.html.twig');
    }
    #[Route('/blog/en/enCV', name: 'app_blog_enCV')]
    public function enCV(): Response
    {
        return $this->render('blog/en/enCV.html.twig');
    }
    #[Route('/blog/en/enEportfolio', name: 'app_blog_enEP')]
    public function enEP(): Response
    {
        return $this->render('blog/en/enEportfolio.html.twig');
    }
}
