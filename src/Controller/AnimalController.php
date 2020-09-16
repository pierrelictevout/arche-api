<?php

namespace App\Controller;

use App\Entity\Animal;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/animal", name="animal")
     */
    public function index()
    {
        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
        ]);
    }
    public function createAnimal(): Response {
        $entityManager = $this->getDoctrine()->getManager();

        $animal= new Animal();
        $animal->setArk();
        $animal->setHeight(150);
        $animal->setLength(10);
        $animal->setWeight(180);
        $animal->setWidth(50);

        $entityManager->persist($animal);

        $entityManager->flush();

        return new Response('Saved a new animal, surely a Human, he is number : ',$animal->getId());

    }
}
