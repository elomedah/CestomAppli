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
    private $posteMembre;

    /**
     * @var \Cestom\StoreBundle\Entity\Membre
     */
    private $idmembre;

    /**
     * @var \Cestom\StoreBundle\Entity\Ville
     */
    private $idville;

    /**
     * @var \Cestom\StoreBundle\Entity\AnneeScolaire
     */
    private $anneeScolaire;


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
     * Set idmembre
     *
     * @param \Cestom\StoreBundle\Entity\Membre $idmembre
     * @return BureauVille
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
     * Set idville
     *
     * @param \Cestom\StoreBundle\Entity\Ville $idville
     * @return BureauVille
     */
    public function setIdville(\Cestom\StoreBundle\Entity\Ville $idville)
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
     * Set anneeScolaire
     *
     * @param \Cestom\StoreBundle\Entity\AnneeScolaire $anneeScolaire
     * @return BureauVille
     */
    public function setAnneeScolaire(\Cestom\StoreBundle\Entity\AnneeScolaire $anneeScolaire)
    {
        $this->anneeScolaire = $anneeScolaire;

        return $this;
    }

    /**
     * Get anneeScolaire
     *
     * @return \Cestom\StoreBundle\Entity\AnneeScolaire 
     */
    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }
}
