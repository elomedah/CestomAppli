<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 */
class Ville
{
    /**
     * @var string
     */
    private $nomville;

    /**
     * @var integer
     */
    private $idville;


    /**
     * Set nomville
     *
     * @param string $nomville
     * @return Ville
     */
    public function setNomville($nomville)
    {
        $this->nomville = $nomville;

        return $this;
    }

    /**
     * Get nomville
     *
     * @return string 
     */
    public function getNomville()
    {
        return $this->nomville;
    }

    /**
     * Get idville
     *
     * @return integer 
     */
    public function getIdville()
    {
        return $this->idville;
    }
}
