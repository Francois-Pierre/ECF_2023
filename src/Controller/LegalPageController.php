<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegalPageController extends AbstractController
{
    #[Route('/legal', name: 'app_legal_page')]
    public function index(): Response
    {
        return $this->render('legal_page/index.html.twig', [
            'controller_name' => 'LegalPageController',
        ]);
    }
}
