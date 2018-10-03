<?php
/**
 * @Entity(repositoryClass="CharacterRepository") @Table(name="characters")
 */

namespace App\DoctrineDB;

use Doctrine\Common\Collections\ArrayCollection;

class Character
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
    protected $class;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $subclass;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $vorname;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $nachname;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $spitzname;
    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $created;
    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $geburtstag;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $viertel;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $strasse;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $haus;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $sexuelleOrientierung;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $vermoegen;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $odo;
    /**
     * @Column(type="string")
     * @var string
     * @Assert\NotBlank()
     */
    protected $glueck;
    /**
     * @Column(type="integer")
     * @var int
     * @Assert\NotBlank()
     */
    protected $fp;
    /**
     * @Column(type="integer")
     * @var int
     * @Assert\NotBlank()
     */
    protected $strength;
    /**
     * @Column(type="integer")
     * @var int
     * @Assert\NotBlank()
     */
    protected $agility;
    /**
     * @Column(type="integer")
     * @var int
     * @Assert\NotBlank()
     */
    protected $endurance;
    /**
     * @Column(type="integer")
     * @var int
     * @Assert\NotBlank()
     */
    protected $effort;
    /**
     * @Column(type="integer")
     * @var int
     * @Assert\NotBlank()
     */
    protected $discipline;
    /**
     * @Column(type="integer")
     * @var int
     * @Assert\NotBlank()
     */
    protected $control;
    /**
     * @Column(type="integer")
     * @var int
     * @Assert\NotBlank()
     */
    protected $killed;
    /**
     * @OneToMany(targetEntity="Traits", mappedBy="chosenTrait")
     * @var Traits[] An ArrayCollection of Traits objects.
     **/
    protected $traits;
    /**
     * @Column(type="boolean")
     * @var boolean
     * @Assert\NotBlank()
     */
    protected $servant;
    /**
     * @ManyToOne(targetEntity="User", inversedBy="setCharacters")
     * @var User[] An ArrayCollection of User objects.
     **/
    protected $user;


    public function __construct()
    {
        $this->traits = new ArrayCollection();
        $this->user = new ArrayCollection();
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
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @param string $class
     */
    public function setClass(string $class): void
    {
        $this->class = $class;
    }

    /**
     * @return string
     */
    public function getSubclass(): string
    {
        return $this->subclass;
    }

    /**
     * @param string $subclass
     */
    public function setSubclass(string $subclass): void
    {
        $this->subclass = $subclass;
    }

    /**
     * @return string
     */
    public function getVorname(): string
    {
        return $this->vorname;
    }

    /**
     * @param string $vorname
     */
    public function setVorname(string $vorname): void
    {
        $this->vorname = $vorname;
    }

    /**
     * @return string
     */
    public function getNachname(): string
    {
        return $this->nachname;
    }

    /**
     * @param string $nachname
     */
    public function setNachname(string $nachname): void
    {
        $this->nachname = $nachname;
    }

    /**
     * @return string
     */
    public function getSpitzname(): string
    {
        return $this->spitzname;
    }

    /**
     * @param string $spitzname
     */
    public function setSpitzname(string $spitzname): void
    {
        $this->spitzname = $spitzname;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     */
    public function setCreated(DateTime $created): void
    {
        $this->created = $created;
    }

    /**
     * @return DateTime
     */
    public function getGeburtstag(): DateTime
    {
        return $this->geburtstag;
    }

    /**
     * @param DateTime $geburtstag
     */
    public function setGeburtstag(DateTime $geburtstag): void
    {
        $this->geburtstag = $geburtstag;
    }

    /**
     * @return string
     */
    public function getViertel(): string
    {
        return $this->viertel;
    }

    /**
     * @param string $viertel
     */
    public function setViertel(string $viertel): void
    {
        $this->viertel = $viertel;
    }

    /**
     * @return string
     */
    public function getStrasse(): string
    {
        return $this->strasse;
    }

    /**
     * @param string $strasse
     */
    public function setStrasse(string $strasse): void
    {
        $this->strasse = $strasse;
    }

    /**
     * @return string
     */
    public function getHaus(): string
    {
        return $this->haus;
    }

    /**
     * @param string $haus
     */
    public function setHaus(string $haus): void
    {
        $this->haus = $haus;
    }

    /**
     * @return string
     */
    public function getSexuelleOrientierung(): string
    {
        return $this->sexuelleOrientierung;
    }

    /**
     * @param string $sexuelleOrientierung
     */
    public function setSexuelleOrientierung(string $sexuelleOrientierung): void
    {
        $this->sexuelleOrientierung = $sexuelleOrientierung;
    }

    /**
     * @return string
     */
    public function getVermoegen(): string
    {
        return $this->vermoegen;
    }

    /**
     * @param string $vermoegen
     */
    public function setVermoegen(string $vermoegen): void
    {
        $this->vermoegen = $vermoegen;
    }

    /**
     * @return string
     */
    public function getOdo(): string
    {
        return $this->odo;
    }

    /**
     * @param string $odo
     */
    public function setOdo(string $odo): void
    {
        $this->odo = $odo;
    }

    /**
     * @return string
     */
    public function getGlueck(): string
    {
        return $this->glueck;
    }

    /**
     * @param string $glueck
     */
    public function setGlueck(string $glueck): void
    {
        $this->glueck = $glueck;
    }

    /**
     * @return int
     */
    public function getFp(): int
    {
        return $this->fp;
    }

    /**
     * @param int $fp
     */
    public function setFp(int $fp): void
    {
        $this->fp = $fp;
    }

    /**
     * @return int
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * @param int $strength
     */
    public function setStrength(int $strength): void
    {
        $this->strength = $strength;
    }

    /**
     * @return int
     */
    public function getAgility(): int
    {
        return $this->agility;
    }

    /**
     * @param int $agility
     */
    public function setAgility(int $agility): void
    {
        $this->agility = $agility;
    }

    /**
     * @return int
     */
    public function getEndurance(): int
    {
        return $this->endurance;
    }

    /**
     * @param int $endurance
     */
    public function setEndurance(int $endurance): void
    {
        $this->endurance = $endurance;
    }

    /**
     * @return int
     */
    public function getEffort(): int
    {
        return $this->effort;
    }

    /**
     * @param int $effort
     */
    public function setEffort(int $effort): void
    {
        $this->effort = $effort;
    }

    /**
     * @return int
     */
    public function getDiscipline(): int
    {
        return $this->discipline;
    }

    /**
     * @param int $discipline
     */
    public function setDiscipline(int $discipline): void
    {
        $this->discipline = $discipline;
    }

    /**
     * @return int
     */
    public function getControl(): int
    {
        return $this->control;
    }

    /**
     * @param int $control
     */
    public function setControl(int $control): void
    {
        $this->control = $control;
    }

    /**
     * @return int
     */
    public function getKilled(): int
    {
        return $this->killed;
    }

    /**
     * @param int $killed
     */
    public function setKilled(int $killed): void
    {
        $this->killed = $killed;
    }

    /**
     * @return Traits[]
     */
    public function getTraits(): array
    {
        return $this->traits;
    }

    /**
     * @param Traits[] $traits
     */
    public function setTraits(Traits $traits): void
    {
        $this->traits = $traits;
    }

    /**
     * @return bool
     */
    public function isServant(): bool
    {
        return $this->servant;
    }

    /**
     * @param bool $servant
     */
    public function setServant(bool $servant): void
    {
        $this->servant = $servant;
    }
    /**
     * @param User[] $user
     */
    public function setUser(User $user)
    {
        $user->setCharacters($this);
        $this->user = $user;
    }
    /**
     * @return User[]
     */
    public function getUser(): array
    {
        return $this->user;
    }

}