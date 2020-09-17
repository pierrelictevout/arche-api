<?php

namespace App\DataFixtures;

use App\Entity\Ark;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ArkFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // $product = new Product();

        // $manager->persist($product);
        $ark=new Ark();
        $ark->setWidth(2500); //25 mètres de largeur
        $ark->setWeight(6500000); //6500 kilos
        $ark->setLength(250000); //250 mètre de longueur
        $ark->setHeight(500); //5 mètres de hauteur
        $manager->persist($ark);

        $this->addReference('Jsp',$ark);

        $manager->flush();
    }

}
