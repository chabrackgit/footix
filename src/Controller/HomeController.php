<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        $prenom = 'imad';
        $nom = 'ibnoulmalih';
        $age = 25;
        $profession = 'dev';
        return $this->render('home/index.html.twig', [
            'prenom' => $prenom,
            'nom' => $nom,
            'age' => $age
        ]);
    }
}
