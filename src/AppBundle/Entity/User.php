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
     * @ORM\Column(name="nomU", type="string")
     */
    private $nameU;

    /**
     * @var string
     * @ORM\Column(name="preU", type="string")
     */
    private $preU;

    /**
     * @var string
     * @ORM\Column(name="mdp", type="string")
     */
    private $mdp;

    /**
     * @var string
     * @ORM\Column(name="role", type="string")
     */
    private $role;

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
     * @param string $nameU
     *
     * @return User
     */
    public function setNameU($nameU)
    {
        $this->nameU = $nameU;

        return $this;
    }

    /**
     * Get nameU.
     *
     * @return string
     */
    public function getNameU()
    {
        return $this->nameU;
    }

    /**
     * Set preU.
     *
     * @param string $preU
     *
     * @return User
     */
    public function setPreU($preU)
    {
        $this->preU = $preU;

        return $this;
    }

    /**
     * Get preU.
     *
     * @return string
     */
    public function getPreU()
    {
        return $this->preU;
    }

    /**
     * Set mdp.
     *
     * @param string $mdp
     *
     * @return User
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp.
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set role.
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
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
