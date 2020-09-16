<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ArkRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ArkRepository::class)
 */
class Ark
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $length;

    /**
     * @ORM\Column(type="integer")
     */
    private $width;

    /**
     * @ORM\Column(type="integer")
     */
    private $weight;

    /**
     * @ORM\Column(type="integer")
     */
    private $height;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $animals;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $humans;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getAnimals(): ?string
    {
        return $this->animals;
    }

    public function setAnimals(string $animals): self
    {
        $this->animals = $animals;

        return $this;
    }

    public function getHumans(): ?string
    {
        return $this->humans;
    }

    public function setHumans(string $humans): self
    {
        $this->humans = $humans;

        return $this;
    }
}
