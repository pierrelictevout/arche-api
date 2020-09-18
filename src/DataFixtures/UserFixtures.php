<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $noe = $this->createUser('Noe', 'Noe2000', ['ROLE_ADMIN']);
        $manager->persist($noe);

        $dam = $this->createUser('DamnLePDG', 'PDG2000', ['ROLE_USER']);
        $manager->persist($dam);
        $manager->flush();
    }

    private function createUser(string $username, string $password, array $roles): User
    {
        $user = new User();
        $user
            ->setUsername($username)
            ->setRoles($roles)
        ;

        $encodedPassword = $this->encoder->encodePassword($user, $password);
        $user->setPassword($encodedPassword);

        return $user;
    }
}
