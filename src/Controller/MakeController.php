<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MakeController extends AbstractController
{
//    #[Route('/make', name: 'app_make')]
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return new Response(content: '<h1>Welcome freeCodeCamp!</h1>');
    }
    #[Route('/custom', name: 'custom')]
    public function custom(): Response
    {
        return new Response(content: '<h1>Custom page!</h1>');
    }
}
