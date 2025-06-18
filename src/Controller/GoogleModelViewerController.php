<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GoogleModelViewerController extends AbstractController
{
    #[Route('/model-view', name: 'app_google_model_viewer')]
    public function index(): Response
    {
        return $this->render('model-viewer/index.html.twig', [
            'controller_name' => 'GoogleModelViewerController',
        ]);
    }
}
