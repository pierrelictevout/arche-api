<?php


namespace App\DataFixtures;
use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        for($i = 0; $i < 20; $i++){
            $randomAnimalTypeKey = array_rand(Animal::getAllTypes());//renvoie la clef
            $animal = new Animal();
            $animal
                ->setWidth(mt_rand(20,28))
                ->setHeight(mt_rand(80,90))
                ->setArk($this->getReference('ark'))
                ->setType(Animal::getAllTypes()[$randomAnimalTypeKey]) // renvoie la valeur associée à la clef
                ->setLength(mt_rand(10,18))
                ->setWeight(mt_rand(180,220));
            $manager->persist($animal);
        }
        $manager->flush();

    }
    public function getDependencies(): array
    {
        return [ArkFixtures::class];
    }

}