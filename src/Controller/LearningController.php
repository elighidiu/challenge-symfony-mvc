<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class LearningController extends AbstractController
{

    // To process form data, you’ll need to call the handleRequest() method:
        // $form->handleRequest();

    #[Route('/about-me', name: 'about-me')]
    public function aboutMe(): Response {
        return $this->render('learning/index.html.twig', [
                    'controller_name' => 'Lorem ipsum',
                ]);
        //return new Response('La la laaaaa');
    }

    #[Route('/', name: 'show-my-name')]
    public function showMyName(): Response {

        $form = $this->createFormBuilder()
            ->add('name', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Save Name'])
            ->getForm();

        return $this->render('learning/show_my_name.html.twig', [
            'name' => 'Lorem ipsum', 'form' => $form->createView(),
        ]);
        
    }

    #[Route('/change-my-name', name: 'change-my-name')]
    public function changeMyName(): Response {
        return $this->render('learning/change_my_name.html.twig', [
            'controller_name' => 'Lorem ipsum',
        ]);
    }

}


