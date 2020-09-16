<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ArkRepository;
use Doctrine\ORM\Mapping as ORM;

abstract class Animal
{
    /**
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @ORM\Column(type="string")
     */
    private $sex;
    /**
     * @ORM\Column(type="string")
     */
    private $type;
    /**
     * @ORM\Column(type="string")
     */
    private $scream;
    /**
     * @ORM\Column(type="string")
     */
    private $paws;
    /**
     * @ORM\Column(type="smallint")
     */
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPaws()
    {
        return $this->paws;
    }

    /**
     * @return mixed
     */
    public function getScream()
    {
        return $this->scream;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $paws
     */
    public function setPaws($paws)
    {
        $this->paws = $paws;
    }

    /**
     * @param mixed $scream
     */
    public function setScream($scream)
    {
        $this->scream = $scream;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}