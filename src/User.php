<?php
// src/User.php

namespace App;

/**
 * @Entity @Table(name="users")
 */

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="users")
 **/

class User
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $name;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $email;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $password;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $roles;
    /**
     * @OneToMany(targetEntity="Character", mappedBy="userCharacters")
     * @var Character[] An ArrayCollection of Characters objects.
     **/
    protected $characters;
    /**
     * @OneToMany(targetEntity="Character", mappedBy="userServants")
     * @var Character[] An ArrayCollection of Servants objects.
     **/
    protected $servants;

    public function __construct()
    {
        $this->characters = new ArrayCollection();
        $this->servants= new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getRoles(): string
    {
        return $this->roles;
    }

    /**
     * @param string $roles
     */
    public function setRoles(string $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @return Character[]
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * @param Character[] $characters
     */
    public function setCharacters(Character $character): void
    {
        $this->characters = $character;
    }
}