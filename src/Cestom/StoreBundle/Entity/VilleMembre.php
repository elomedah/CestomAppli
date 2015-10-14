<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VilleMembre
 */
class VilleMembre
{
    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $dateDebut;

    /**
     * @var integer
     */
    private $idvillemembre;

    /**
     * @var \Cestom\StoreBundle\Entity\Membre
     */
    private $idmembre;

    /**
     * @var \Cestom\StoreBundle\Entity\Ville
     */
    private $idville;


    /**
     * Set adresse
     *
     * @param string $adresse
     * @return VilleMembre
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     * @return VilleMembre
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Get idvillemembre
     *
     * @return integer 
     */
    public function getIdvillemembre()
    {
        return $this->idvillemembre;
    }

    /**
     * Set idmembre
     *
     * @param \Cestom\StoreBundle\Entity\Membre $idmembre
     * @return VilleMembre
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

    /**
     * Set idville
     *
     * @param \Cestom\StoreBundle\Entity\Ville $idville
     * @return VilleMembre
     */
    public function setIdville(\Cestom\StoreBundle\Entity\Ville $idville = null)
    {
        $this->idville = $idville;

        return $this;
    }

    /**
     * Get idville
     *
     * @return \Cestom\StoreBundle\Entity\Ville 
     */
    public function getIdville()
    {
        return $this->idville;
    }
}
