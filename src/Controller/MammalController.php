<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MammalController extends AbstractController
{
    /**
     * @Route("/mammal", name="mammal")
     */
    public function index()
    {
        return $this->render('mammal/index.html.twig', [
            'controller_name' => 'MammalController',
        ]);
    }
}
