<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Ark;
use App\Entity\Human;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
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

        $penguin=new Animal();
        $penguin->setWidth(20);
        $penguin->setHeight(80);
        $penguin->setArk($ark);
        $penguin->setLength(10);
        $penguin->setWeight(180);
        $manager->persist($penguin);

        $human=new Human();
        $human->setNbFoot(2);
        $human->setArk(null);
        $human->setHeight(180);//1m80
        $human->setWeight(80);
        $human->setWidth(12);
        $human->setlength(12);
        $human->setHaircolor('grey');
        $human->setSurname('Guy');
        $manager->persist($human);

        $manager->flush();
    }
}
