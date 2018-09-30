<?php
/**
 * @Entity @Table(name="users")
 */

namespace App;

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
     */
    protected $name;
    /**
     * @OneToMany(targetEntity="Abilities", mappedBy="visible")
     * @var Abilities[] An ArrayCollection of Abilities objects.
     **/
    protected $visibleAbilities;
    /**
     * @OneToMany(targetEntity="Abilities", mappedBy="learned")
     * @var Abilities[] An ArrayCollection of Abilities objects.
     **/
    protected $learnedAbilities;

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