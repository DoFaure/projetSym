<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */

class User extends BaseUser
{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="lastname", type="string")
     */
    private $lastname;

    /**
     * @var string
     * @ORM\Column(name="firstname", type="string")
     */
    private $firstname;


    /**
     * @ORM\OneToMany(targetEntity="Project", mappedBy="idChefP")
     *
     */
    private $projetU;

    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="idDevT")
     *
     */
    private $tacheU;


    public function __construct()
    {
        parent::__construct();
        $this->projetU = new ArrayCollection();
        $this->tacheU = new ArrayCollection();
    }


    /**
     * Get idUser.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameU.
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get nameU.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set preU.
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get preU.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }


    /**
     * Set projetU.
     *
     * @param arrayCollection $projetU
     *
     * @return User
     */
    public function addProjetU(Project $projetU)
    {
        $this->projetU[] = $projetU;

        return $this;
    }

    /**
     * Get projetU.
     *
     * @return arrayCollection
     */
    public function getProjetU()
    {
        return $this->projetU;
    }

    /**
     * Add tacheU.
     *
     * @param arrayCollection $tacheU
     *
     * @return User
     */
    public function addTacheU(Task $tacheU)
    {
        $this->tacheU[] = $tacheU;

        return $this;
    }

    /**
     * Get tacheU.
     *
     * @return arrayCollection
     */
    public function getTacheU()
    {
        return $this->tacheU;
    }
}
