<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telephone
 */
class Telephone
{
    /**
     * @var string
     */
    private $numeroTel;

    /**
     * @var \Cestom\StoreBundle\Entity\Membre
     */
    private $id;


    /**
     * Get numeroTel
     *
     * @return string 
     */
    public function getNumeroTel()
    {
        return $this->numeroTel;
    }

    /**
     * Set id
     *
     * @param \Cestom\StoreBundle\Entity\Membre $id
     * @return Telephone
     */
    public function setId(\Cestom\StoreBundle\Entity\Membre $id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \Cestom\StoreBundle\Entity\Membre 
     */
    public function getId()
    {
        return $this->id;
    }
}
