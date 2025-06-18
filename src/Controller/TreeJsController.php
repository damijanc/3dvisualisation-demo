<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TreeJsController extends AbstractController
{
    #[Route('/tree-js', name: 'app_tree_js')]
    public function index(): Response
    {
        return $this->render('tree_js/index.html.twig', [
            'controller_name' => 'TreeJsController',
        ]);
    }
}
