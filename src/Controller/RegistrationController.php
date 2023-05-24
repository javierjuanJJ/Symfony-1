<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\PostType;
use App\Form\RegistrationType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'register')]
    public function register(Request $request, ManagerRegistry $doctrine2, UserPasswordHasherInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);
        //dd($form);

        if ($form->isSubmitted() && $form->isValid()){

            $data = $form->getData();

//            $user = new User();

//            $user->setUsername($data['username']);
//            $user->setPassword(
//                $passwordEncoder->hashPassword($user, $data['password'])
//            );


            $user->setPassword($passwordEncoder->hashPassword($user, $user->getPassword()));

            $em = $doctrine2->getManager();

            $em->persist($user);

            $em->flush();

            $this->redirect($this->generateUrl('app_login'));
        }

        return $this->render('registration/index.html.twig', [
            'form' => $form->createView(),
            //'form' => $form,
        ]);
    }
}
