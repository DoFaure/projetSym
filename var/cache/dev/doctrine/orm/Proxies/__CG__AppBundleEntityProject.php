<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Project extends \AppBundle\Entity\Project implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'nomP', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'descriptionP', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'dateDebutP', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'dateFinP', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'etatP', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'nomClient', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'idChefP', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'taches'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'nomP', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'descriptionP', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'dateDebutP', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'dateFinP', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'etatP', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'nomClient', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'idChefP', '' . "\0" . 'AppBundle\\Entity\\Project' . "\0" . 'taches'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Project $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomP($nomP)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomP', [$nomP]);

        return parent::setNomP($nomP);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomP()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomP', []);

        return parent::getNomP();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionP($descriptionP = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionP', [$descriptionP]);

        return parent::setDescriptionP($descriptionP);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionP()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionP', []);

        return parent::getDescriptionP();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebutP($dateDebutP)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebutP', [$dateDebutP]);

        return parent::setDateDebutP($dateDebutP);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebutP()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebutP', []);

        return parent::getDateDebutP();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFinP($dateFinP)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFinP', [$dateFinP]);

        return parent::setDateFinP($dateFinP);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFinP()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFinP', []);

        return parent::getDateFinP();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatP($etatP)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatP', [$etatP]);

        return parent::setEtatP($etatP);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatP()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatP', []);

        return parent::getEtatP();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomClient($nomClient = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomClient', [$nomClient]);

        return parent::setNomClient($nomClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomClient', []);

        return parent::getNomClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdChefP($idChefP)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdChefP', [$idChefP]);

        return parent::setIdChefP($idChefP);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdChefP()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdChefP', []);

        return parent::getIdChefP();
    }

    /**
     * {@inheritDoc}
     */
    public function addTaches(\AppBundle\Entity\Task $taches)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTaches', [$taches]);

        return parent::addTaches($taches);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaches()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaches', []);

        return parent::getTaches();
    }

}
