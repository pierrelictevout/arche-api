<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use App\Repository\ArkRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     subresourceOperations = {
 *          "api_arks_animals_get_subresources" = {
 *              "method" = "get",
 *              "path" = "/arks/{id}/animals"
 *     }
 *     },
 *     collectionOperations={
 *          "get",
 *      },
 *      itemOperations={
 *          "get",
 *     }
 *     )
 * @ORM\Entity(repositoryClass = ArkRepository::class)
 */
class Ark
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type = "integer")
     */
    private $id;

    /**
     * @ORM\Column(type = "integer")
     */
    private $length;

    /**
     * @ORM\Column(type = "integer")
     */
    private $width;

    /**
     * @ORM\Column(type = "integer")
     */
    private $weight;

    /**
     * @ORM\Column(type = "integer")
     */
    private $height;

    /**
     * @ORM\OneToMany(targetEntity = Animal::class, mappedBy = "ark")
     * @ApiSubresource
     */
    private $animal;

    public function __construct()
    {
        $this->animal = new ArrayCollection();
    }

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

    /**
     * @return Collection|Animal[]
     */
    public function getAnimal(): Collection
    {
        return $this->animal;
    }

    public function addAnimal(Animal $animal): self
    {
        if (!$this->animal->contains($animal)) {
            $this->animal[] = $animal;
            $animal->setArk($this);
        }

        return $this;
    }

    public function removeAnimal(Animal $animal): self
    {
        if ($this->animal->contains($animal)) {
            $this->animal->removeElement($animal);
            // set the owning side to null (unless already changed)
            if ($animal->getArk() === $this) {
                $animal->setArk(null);
            }
        }

        return $this;
    }
}
