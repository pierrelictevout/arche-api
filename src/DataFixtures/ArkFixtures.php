<?php

namespace App\DataFixtures;

use App\Entity\Ark;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArkFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $ark = new Ark();
        $ark->setWidth(2500) //25 mètres de largeur
            ->setWeight(6500000) //6500 kilos
            ->setLength(250000) //250 mètre de longueur
            ->setHeight(500); //5 mètres de hauteur
        $manager->persist($ark);

        $this->addReference('ark', $ark);

        $manager->flush();
    }
}
