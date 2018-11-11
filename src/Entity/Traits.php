<?php
// src/Traits.php

namespace App;

/**
 * @Entity(repositoryClass="TraitRepository") @Table(name="traits")
 */

class Traits
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
    protected $title;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $description;

    /**
     * @return int
     * @Assert\NotBlank()
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

}