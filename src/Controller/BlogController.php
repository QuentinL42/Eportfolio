<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/home', name: 'app_blog_home')]
    public function home(): Response
    {
        return $this->render('blog/home.html.twig');
    }
    #[Route('/blog/information', name: 'app_blog_information')]
    public function info(): Response
    {
        return $this->render('blog/information.html.twig');
    }
    #[Route('/blog/CV', name: 'app_blog_CV')]
    public function CV(): Response
    {
        return $this->render('blog/CV.html.twig');
    }
    #[Route('/blog/Eportfolio', name: 'app_blog_EP')]
    public function EP(): Response
    {
        return $this->render('blog/Eportfolio.html.twig');
    }
}
