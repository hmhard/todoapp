<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'page_name' => 'Home',
        ]);
    }
      /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('home/index.html.twig', [
            'page_name' => 'about us',
        ]);
    }
}
