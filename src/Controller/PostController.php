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

        return $this->redirect($this->generateUrl('post.index'));

    }
    #[Route('/show/{id}', name: 'show')]
    public function show(Post $post)
    {

        return $this->render('post/show.html.twig',[
            'post'=> $post
        ]);
    }
    #[Route('/delete/{id}', name: 'delete')]
    public function remove(Post $post, ManagerRegistry $doctrine2)
    {
        $em = $doctrine2->getManager();

        $em->remove($post);

        $em->flush();

        $this->addFlash('success', 'Post was removed');

        return $this->redirect($this->generateUrl('post.index'));
    }
    
}
