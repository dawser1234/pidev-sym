<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController extends AbstractController
{
    #[Route('/log', name: 'baseBack')]
     
    public function index(): Response
    {
        // Passer une variable à la vue
        $ma_variable = 'Ceci est une variable';

        return $this->render('Login.html.twig', [
            'ma_variable' => $ma_variable,
        ]);
    }
}