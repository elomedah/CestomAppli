<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 */
class Formation
{
    /**
     * @var string
     */
    private $libelleFormation;

    /**
     * @var string
     */
    private $diplomeViseFormation;

    /**
     * @var string
     */
    private $programmeBourse;

    /**
     * @var string
     */
    private $dateDebutFormation;

    /**
     * @var string
     */
    private $dureeFormation;

    /**
     * @var string
     */
    private $competenceAcquise;

    /**
     * @var integer
     */
    private $idFormation;

    /**
     * @var \Cestom\StoreBundle\Entity\Universite
     */
    private $iduniv;

    /**
     * @var \Cestom\StoreBundle\Entity\Membre
     */
    private $idmembre;


    /**
     * Set libelleFormation
     *
     * @param string $libelleFormation
     * @return Formation
     */
    public function setLibelleFormation($libelleFormation)
    {
        $this->libelleFormation = $libelleFormation;

        return $this;
    }

    /**
     * Get libelleFormation
     *
     * @return string 
     */
    public function getLibelleFormation()
    {
        return $this->libelleFormation;
    }

    /**
     * Set diplomeViseFormation
     *
     * @param string $diplomeViseFormation
     * @return Formation
     */
    public function setDiplomeViseFormation($diplomeViseFormation)
    {
        $this->diplomeViseFormation = $diplomeViseFormation;

        return $this;
    }

    /**
     * Get diplomeViseFormation
     *
     * @return string 
     */
    public function getDiplomeViseFormation()
    {
        return $this->diplomeViseFormation;
    }

    /**
     * Set programmeBourse
     *
     * @param string $programmeBourse
     * @return Formation
     */
    public function setProgrammeBourse($programmeBourse)
    {
        $this->programmeBourse = $programmeBourse;

        return $this;
    }

    /**
     * Get programmeBourse
     *
     * @return string 
     */
    public function getProgrammeBourse()
    {
        return $this->programmeBourse;
    }

    /**
     * Set dateDebutFormation
     *
     * @param string $dateDebutFormation
     * @return Formation
     */
    public function setDateDebutFormation($dateDebutFormation)
    {
        $this->dateDebutFormation = $dateDebutFormation;

        return $this;
    }

    /**
     * Get dateDebutFormation
     *
     * @return string 
     */
    public function getDateDebutFormation()
    {
        return $this->dateDebutFormation;
    }

    /**
     * Set dureeFormation
     *
     * @param string $dureeFormation
     * @return Formation
     */
    public function setDureeFormation($dureeFormation)
    {
        $this->dureeFormation = $dureeFormation;

        return $this;
    }

    /**
     * Get dureeFormation
     *
     * @return string 
     */
    public function getDureeFormation()
    {
        return $this->dureeFormation;
    }

    /**
     * Set competenceAcquise
     *
     * @param string $competenceAcquise
     * @return Formation
     */
    public function setCompetenceAcquise($competenceAcquise)
    {
        $this->competenceAcquise = $competenceAcquise;

        return $this;
    }

    /**
     * Get competenceAcquise
     *
     * @return string 
     */
    public function getCompetenceAcquise()
    {
        return $this->competenceAcquise;
    }

    /**
     * Get idFormation
     *
     * @return integer 
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * Set iduniv
     *
     * @param \Cestom\StoreBundle\Entity\Universite $iduniv
     * @return Formation
     */
    public function setIduniv(\Cestom\StoreBundle\Entity\Universite $iduniv = null)
    {
        $this->iduniv = $iduniv;

        return $this;
    }

    /**
     * Get iduniv
     *
     * @return \Cestom\StoreBundle\Entity\Universite 
     */
    public function getIduniv()
    {
        return $this->iduniv;
    }

    /**
     * Set idmembre
     *
     * @param \Cestom\StoreBundle\Entity\Membre $idmembre
     * @return Formation
     */
    public function setIdmembre(\Cestom\StoreBundle\Entity\Membre $idmembre = null)
    {
        $this->idmembre = $idmembre;

        return $this;
    }

    /**
     * Get idmembre
     *
     * @return \Cestom\StoreBundle\Entity\Membre 
     */
    public function getIdmembre()
    {
        return $this->idmembre;
    }
}
