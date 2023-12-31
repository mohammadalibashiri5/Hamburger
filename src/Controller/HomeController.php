<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function homePage(): Response
    {
        $title = 'Nayeb Hamburger';

        return $this->render('base.html.twig',
        ['title' => $title]);


    }

}