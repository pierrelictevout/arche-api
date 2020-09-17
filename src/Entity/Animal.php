<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AnimalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 * @ORM\Entity(repositoryClass=AnimalRepository::class)
 */
class Animal
{
    const TYPE_BIRD='bird';
    const TYPE_MAMMAL='mammal';
    const TYPE_REPTILIAN='reptilian';
    const TYPE_FISH='fish';
    const TYPE_AMPHIBIAN='amphibian';
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
     * @ORM\Column(type="string",nullable=true)
     */
    private $type;
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
     * @ORM\ManyToOne(targetEntity=Ark::class, inversedBy="animal")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ark;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     * @return $this
     */
        public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
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

    public function getArk(): ?Ark
    {
        return $this->ark;
    }

    public function setArk(?Ark $ark): self
    {
        $this->ark = $ark;

        return $this;
    }

    public static function getAllTypes():array
    {
        return [
            self::TYPE_BIRD,
            self::TYPE_REPTILIAN,
            self::TYPE_MAMMAL,
            self::TYPE_FISH,
            self::TYPE_AMPHIBIAN
        ];
    }
}
