<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VilleMaroc
 *
 * @ORM\Table(name="VILLE_MAROC")
 * @ORM\Entity
 */
class VilleMaroc
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMVILLE", type="string", length=255, nullable=false)
     */
    private $nomville;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDVILLE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idville;



    /**
     * Set nomville
     *
     * @param string $nomville
     * @return VilleMaroc
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
