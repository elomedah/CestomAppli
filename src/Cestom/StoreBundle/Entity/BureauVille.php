<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BureauVille
 */
class BureauVille
{
    /**
     * @var string
     */
    private $anneeScolaire;

    /**
     * @var string
     */
    private $posteMembre;

    /**
     * @var integer
     */
    private $idbureau;

    /**
     * @var \Cestom\StoreBundle\Entity\Ville
     */
    private $idville;

    /**
     * @var \Cestom\StoreBundle\Entity\Membre
     */
    private $idmembre;


    /**
     * Set anneeScolaire
     *
     * @param string $anneeScolaire
     * @return BureauVille
     */
    public function setAnneeScolaire($anneeScolaire)
    {
        $this->anneeScolaire = $anneeScolaire;

        return $this;
    }

    /**
     * Get anneeScolaire
     *
     * @return string 
     */
    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }

    /**
     * Set posteMembre
     *
     * @param string $posteMembre
     * @return BureauVille
     */
    public function setPosteMembre($posteMembre)
    {
        $this->posteMembre = $posteMembre;

        return $this;
    }

    /**
     * Get posteMembre
     *
     * @return string 
     */
    public function getPosteMembre()
    {
        return $this->posteMembre;
    }

    /**
     * Get idbureau
     *
     * @return integer 
     */
    public function getIdbureau()
    {
        return $this->idbureau;
    }

    /**
     * Set idville
     *
     * @param \Cestom\StoreBundle\Entity\Ville $idville
     * @return BureauVille
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

    /**
     * Set idmembre
     *
     * @param \Cestom\StoreBundle\Entity\Membre $idmembre
     * @return BureauVille
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
