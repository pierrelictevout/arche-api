<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ApiResource(
 *     attributes = {"security" = "is_granted('ROLE_USER')"},
 *     collectionOperations = {
 *         "get",
 *         "post" = {"security" = "is_granted('ROLE_ADMIN')"}
 *     },
 *     itemOperations = {
 *         "get",
 *         "put" = {"security" = "is_granted('ROLE_ADMIN')"},
 *         "delete" = {"security" = "is_granted('ROLE_ADMIN')"}
 * }),
 * @ORM\Entity(repositoryClass = UserRepository::class)
 * @ORM\Table(name = "`user`")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type = "integer")
     */
    private $id;

    /**
     * @ORM\Column(type = "string", length = 255)
     */
    private $username;

    /**
     * @ORM\Column(type = "string", length = 255)
     */
    private $password;

    /**
     * @ORM\Column(type = "json")
     */
    private $roles = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function setRoles($roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return $this->roles;
    }

    public function serialize()
    {
        // TODO: Implement serialize() method.
    }

    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.

        // utiliser en cas de plainpassword
    }
}
