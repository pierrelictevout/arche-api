<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MammalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=MammalRepository::class)
 */
class Mammal extends Animal
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $nbFoot;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbFoot(): ?int
    {
        return $this->nbFoot;
    }

    public function setNbFoot(int $nbFoot): self
    {
        $this->nbFoot = $nbFoot;

        return $this;
    }
}
