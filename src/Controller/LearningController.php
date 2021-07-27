<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    //#[Route('/about-me', name: 'about-me')]
    // public function aboutMe(): Response
    // {
    //     return $this->render('learning/index.html.twig', [
    //         'controller_name' => 'LearningController',
    //     ]);
    // }

    public function aboutMe(): Response {
        return new Response('La la laaaaa');
    }
}


