<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaskRepository")
 */
class Task
{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="nomT", type="string")
     * @var string
     */
    private $nomT;

    /**
     * @var string|null
     * @ORM\Column(name="description", type="string")
     */
    private $descriptionT;

    /**
     * @var \Date
     * @ORM\Column(name="dateDebutT", type="date")
     */
    private $dateDebutT;

    /**
     * @var \Date
     * @ORM\Column(name="dateFinT", type="date")
     */
    private $dateFinT;

    /**
     * @var string
     * @ORM\Column(name="etatT", type="string")
     */
    private $etatT;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="taches")
     * 
     */
    private $idProjetT;

    /**
     * @var integer
     *
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="tacheU")
     *
     */
    private $idDevT;


    public function __construct()
    {

    }


    /**
     * Get idT.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomT.
     *
     * @param string $nomT
     *
     * @return Task
     */
    public function setNomT($nomT)
    {
        $this->nomT = $nomT;

        return $this;
    }

    /**
     * Get nomT.
     *
     * @return string
     */
    public function getNomT()
    {
        return $this->nomT;
    }

    /**
     * Set descriptionT.
     *
     * @param string|null $descriptionT
     *
     * @return Task
     */
    public function setDescriptionT($descriptionT = null)
    {
        $this->descriptionT = $descriptionT;

        return $this;
    }

    /**
     * Get descriptionT.
     *
     * @return string|null
     */
    public function getDescriptionT()
    {
        return $this->descriptionT;
    }

    /**
     * Set dateDebutT.
     *
     * @param \DateTime $dateDebutT
     *
     * @return Task
     */
    public function setDateDebutT($dateDebutT)
    {
        $this->dateDebutT = $dateDebutT;

        return $this;
    }

    /**
     * Get dateDebutT.
     *
     *
     * @return \DateTime
     */
    public function getDateDebutT()
    {
        return $this->dateDebutT;
    }

    /**
     * Set dateFinT.
     *
     * @param \DateTime $dateFinT
     *
     * @return Task
     */
    public function setDateFinT($dateFinT)
    {
        $this->dateFinT = $dateFinT;

        return $this;
    }

    /**
     * Get dateFinT.
     *
     * @return \DateTime
     */
    public function getDateFinT()
    {
        return $this->dateFinT;
    }

    /**
     * Set etatT.
     *
     * @param string $etatT
     *
     * @return Task
     */
    public function setEtatT($etatT)
    {
        $this->etatT = $etatT;

        return $this;
    }

    /**
     * Get etatT.
     *
     * @return string
     */
    public function getEtatT()
    {
        return $this->etatT;
    }

    /**
     * Set idProjetT.
     *
     * @param int $idProjetT
     *
     * @return Task
     */
    public function setIdProjetT($idProjetT)
    {
        $this->idProjetT = $idProjetT;

        return $this;
    }

    /**
     * Get idProjetT.
     *
     * @return int
     */
    public function getIdProjetT()
    {
        return $this->idProjetT;
    }

    /**
     * Add idDevT.
     *
     * @param arrayCollection $idDevT
     *
     * @return int
     */
    public function setIdDevT(User $idDevT)
    {
        $this->idDevT = $idDevT;

        return $this;
    }

    /**
     * Get idDevT.
     *
     * @return int
     */
    public function getIdDevT()
    {
        return $this->idDevT;
    }
}
