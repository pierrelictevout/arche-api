<?php


namespace App\DataFixtures;
use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for($i=0;$i<20;$i++){
            $animal = new Animal();
            $animal->setWidth(mt_rand(20,28));
            $animal->setHeight(mt_rand(80,90));
            $animal->setArk($this->getReference('Jsp'));
            $animal->setLength(mt_rand(10,18));
            $animal->setWeight(mt_rand(180,220));
            $manager->persist($animal);
        }
        $manager->flush();

    }
    public function getDependencies()
    {
        return array(
            ArkFixtures::class,
        );
    }

}