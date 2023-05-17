<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
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
    public function index(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findAll();



        return $this->render('home/home.html.twig', [
            'posts' => $posts,
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
    #[Route('/show/{id}', name: 'show')]
    public function show($id, PostRepository $postRepository)
    {
        $post = $postRepository->find($id);

        dump($post);
        die();
//        return $this->render('post/show.html.twig',[
//            'post'=> $post
//        ]);
    }
    
}
