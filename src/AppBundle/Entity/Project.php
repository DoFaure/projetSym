<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 *
 */
class Project
{


    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToOne(targetEntity="Task", inversedBy="idProjetT", cascade={"persist"})
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="nomP", type="string")
     */
    private $nomP;

    /**
     * @var string|null
     * @ORM\Column(name="descriptionP", type="string")
     */
    private $descriptionP;

    /**
     * @var \DateTime
     * @ORM\Column(name="dateDebutP", type="date")
     */
    private $dateDebutP;

    /**
     * @var \DateTime
     * @ORM\Column(name="dateFinP", type="date")
     */
    private $dateFinP;

    /**
     * @var string
     * @ORM\Column(name="etatP", type="string")
     */
    private $etatP;

    /**
     * @var string|null
     * @ORM\Column(name="nomClient", type="string")
     */
    private $nomClient;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="projetU")
     *
     */
    private $idChefP;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Task", mappedBy="idProjetT", orphanRemoval = true)
     *
     */
    private $taches;


    public function __construct()
    {
        $this->taches = new ArrayCollection();
    }

    public function __toString()
    {
        // to show the name of the Category in the select
        return $this->nomP;
    }
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomP.
     *
     * @param string $nomP
     *
     * @return Project
     */
    public function setNomP($nomP)
    {
        $this->nomP = $nomP;

        return $this;
    }

    /**
     * Get nomP.
     *
     * @return string
     */
    public function getNomP()
    {
        return $this->nomP;
    }

    /**
     * Set descriptionP.
     *
     * @param string|null $descriptionP
     *
     * @return Project
     */
    public function setDescriptionP($descriptionP = null)
    {
        $this->descriptionP = $descriptionP;

        return $this;
    }

    /**
     * Get descriptionP.
     *
     * @return string|null
     */
    public function getDescriptionP()
    {
        return $this->descriptionP;
    }

    /**
     * Set dateDebutP.
     *
     * @param \DateTime $dateDebutP
     *
     * @return Project
     */
    public function setDateDebutP($dateDebutP)
    {
        $this->dateDebutP = $dateDebutP;

        return $this;
    }

    /**
     * Get dateDebutP.
     *
     * @return \DateTime
     */
    public function getDateDebutP()
    {
        return $this->dateDebutP;
    }

    /**
     * Set dateFinP.
     *
     * @param \DateTime $dateFinP
     *
     * @return Project
     */
    public function setDateFinP($dateFinP)
    {
        $this->dateFinP = $dateFinP;

        return $this;
    }

    /**
     * Get dateFinP.
     *
     * @return \DateTime
     */
    public function getDateFinP()
    {
        return $this->dateFinP;
    }

    /**
     * Set etatP.
     *
     * @param string $etatP
     *
     * @return Project
     */
    public function setEtatP($etatP)
    {
        $this->etatP = $etatP;

        return $this;
    }

    /**
     * Get etatP.
     *
     * @return string
     */
    public function getEtatP()
    {
        return $this->etatP;
    }

    /**
     * Set nomClient.
     *
     * @param string|null $nomClient
     *
     * @return Project
     */
    public function setNomClient($nomClient = null)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get nomClient.
     *
     * @return string|null
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set idChefP.
     *
     * @param int $idChefP
     *
     * @return Project
     */
    public function setIdChefP($idChefP)
    {
        $this->idChefP = $idChefP;

        return $this;
    }

    /**
     * Get idChefP.
     *
     * @return int
     */
    public function getIdChefP()
    {
        return $this->idChefP;
    }


    public function addTaches(Task $taches)
    {
        $this->taches[] = $taches;

        return $this;
    }

    public function getTaches()
    {
        return $this->taches;
    }
}
