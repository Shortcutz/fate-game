<?php
/**
 * @Entity @Table(name="users")
 */

namespace App;

use Doctrine\Common\Collections\ArrayCollection;

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
     */
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    protected $visibleAbilities;
    protected $learnedAbilities;

    public function __construct()
    {
        $this->visibleAbilities = new ArrayCollection();
        $this->learnedAbilities = new ArrayCollection();
    }

    public function addVisibleAbility(Abilities $ability)
    {
        $this->visibleAbilities[] = $ability;
    }

    public function addLearnedAbility(Abilities $ability)
    {
        $this->learnedAbilities[] = $ability;
    }

}