<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BabylonJsController extends AbstractController
{
    #[Route('/babylon-js', name: 'app_babylon_js')]
    public function index(): Response
    {
        return $this->render('babylon_js/index.html.twig', [
            'controller_name' => 'BabylonJsController',
        ]);
    }
}
