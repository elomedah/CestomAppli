<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="FORMATION", indexes={@ORM\Index(name="FK_FORMATION_MEMBRE", columns={"IDMEMBRE"}), @ORM\Index(name="IDX_4823F5011825B59", columns={"IDUNIV"})})
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var string
     *
     * @ORM\Column(name="DIPLOME_VISE_FORMATION", type="string", length=255, nullable=false)
     */
    private $diplomeViseFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="PROGRAMME_BOURSE", type="string", length=255, nullable=true)
     */
    private $programmeBourse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_DEBUT_FORMATION", type="date", nullable=true)
     */
    private $dateDebutFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="DUREE_FORMATION", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $dureeFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLE_FORMATION", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $libelleFormation;

    /**
     * @var \Cestom\StoreBundle\Entity\Membre
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Cestom\StoreBundle\Entity\Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMEMBRE", referencedColumnName="IDMEMBRE")
     * })
     */
    private $idmembre;

    /**
     * @var \Cestom\StoreBundle\Entity\Universite
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Cestom\StoreBundle\Entity\Universite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDUNIV", referencedColumnName="IDUNIV")
     * })
     */
    private $iduniv;



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
     * @param \DateTime $dateDebutFormation
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
     * @return \DateTime 
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
     * Set idmembre
     *
     * @param \Cestom\StoreBundle\Entity\Membre $idmembre
     * @return Formation
     */
    public function setIdmembre(\Cestom\StoreBundle\Entity\Membre $idmembre)
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

    /**
     * Set iduniv
     *
     * @param \Cestom\StoreBundle\Entity\Universite $iduniv
     * @return Formation
     */
    public function setIduniv(\Cestom\StoreBundle\Entity\Universite $iduniv)
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
}
