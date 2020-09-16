<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArkController extends AbstractController
{
    /**
     * @Route("/ark", name="ark")
     */
    public function index()
    {
        return $this->render('ark/index.html.twig', [
            'controller_name' => 'ArkController',
        ]);
    }
}
