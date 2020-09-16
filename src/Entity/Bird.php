<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BirdRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=BirdRepository::class)
 */
class Bird
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pawShape;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $featherType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPawShape(): ?string
    {
        return $this->pawShape;
    }

    public function setPawShape(string $pawShape): self
    {
        $this->pawShape = $pawShape;

        return $this;
    }

    public function getFeatherType(): ?string
    {
        return $this->featherType;
    }

    public function setFeatherType(string $featherType): self
    {
        $this->featherType = $featherType;

        return $this;
    }
}
