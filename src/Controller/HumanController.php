<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HumanController extends AbstractController
{
    /**
     * @Route("/human", name="human")
     */
    public function index()
    {
        return $this->render('human/index.html.twig', [
            'controller_name' => 'HumanController',
        ]);
    }
}
