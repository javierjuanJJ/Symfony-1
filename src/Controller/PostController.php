<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use App\Services\FileUploader;
use App\Services\Notification;
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
    public function create(Request $request, ManagerRegistry $doctrine2, FileUploader $fileUploader, Notification $notification): Response
    {
        $post = new Post();

        // $post->setTitle('This is going to be a title');
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);
        //$form->getErrors();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine2->getManager();

            $file = $request->files->get('post')['attachment'];

            if ($file){
                $filename = $fileUploader->uploadFile($file);

                $post->setImage($filename);
                $em->persist($post);

                $em->flush();

            }



            return $this->redirect($this->generateUrl('post.index'));
        }



        return $this->render('post/create.html.twig',[
            'form' => $form->createView()
        ]);

//        return $this->redirect($this->generateUrl('post.index'));

    }
    #[Route('/show/{id}', name: 'show')]
    public function show(Post $post)
    {
//        $post = $postRepository->findPostByCategory($id);

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
