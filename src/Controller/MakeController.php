<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Config\Framework\RequestConfig;

class MakeController extends AbstractController
{
//    #[Route('/make', name: 'app_make')]
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return new Response(content: '<h1>Welcome freeCodeCamp!</h1>');
    }
    #[Route('/custom/{name}', name: 'custom')]
    public function custom(Request $request): Response
    {
        dump($request);
        return new Response(content: '<h1>Custom page!</h1>');
    }
}
