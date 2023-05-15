<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
#[Route('/post', name: 'post.')]
class PostController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
    #[Route('/create', name: 'create')]
    public function create(Request $request, ManagerRegistry $doctrine2): Response
    {
        $post = new Post();

        $post->setTitle('This is going to be a title');

        $em = $doctrine2->getManager();

        $em->persist($post);

        $em->flush();

        return new Response('Post was created');

    }
    
}
