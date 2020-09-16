<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BirdController extends AbstractController
{
    /**
     * @Route("/bird", name="bird")
     */
    public function index()
    {
        return $this->render('bird/index.html.twig', [
            'controller_name' => 'BirdController',
        ]);
    }
}
