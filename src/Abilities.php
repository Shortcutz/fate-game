<?php
/**
 * @Entity(repositoryClass="AbilityRepository") @Table(name="abilities")
 */

use Doctrine\Common\Collections\ArrayCollection;
use App\Waffen;

/**
 * @Entity @Table(name="abilities")
 **/

class Abilities
{
    public function __construct()
    {
        $this->waffenliste = new ArrayCollection();
    }

    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    protected $id;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $description;
    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $created;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $status;
    /**
     * @ManyToOne(targetEntity="User", inversedBy="assignedLearned")
     **/
    protected $learned;
    /**
     * @ManyToOne(targetEntity="User", inversedBy="assignedVisible")
     **/
    protected $visible;
    /**
     * @ManyToMany(targetEntity="Waffen")
     **/
    protected $waffenliste;

    protected $waffen = null;

    public function getId()
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setCreated(DateTime $created)
    {
        $this->created = $created;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setLearnedAbility(User $learn)
    {
        $learn->addLearnedAbility($this);
        $this->learned = $learn;
    }

    public function setVisibleAbility(User $visibleNow)
    {
        $visibleNow->addVisibleAbility($this);
        $this->visible = $visibleNow;
    }

    public function getLearned()
    {
        return $this->learned;
    }

    public function getVisible()
    {
        return $this->visible;
    }

    public function weaponAbility(Waffen $waffe)
    {
        $this->waffen[] = $waffe;
    }

    public function getWaffen()
    {
        return $this->waffen;
    }
}