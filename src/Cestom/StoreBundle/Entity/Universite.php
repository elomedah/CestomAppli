<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Universite
 *
 * @ORM\Table(name="UNIVERSITE")
 * @ORM\Entity
 */
class Universite
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMUNIV", type="string", length=255, nullable=false)
     */
    private $nomuniv;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTUNIV", type="string", length=255, nullable=true)
     */
    private $contactuniv;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESSEUNIV", type="string", length=500, nullable=true)
     */
    private $addresseuniv;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDUNIV", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniv;



    /**
     * Set nomuniv
     *
     * @param string $nomuniv
     * @return Universite
     */
    public function setNomuniv($nomuniv)
    {
        $this->nomuniv = $nomuniv;

        return $this;
    }

    /**
     * Get nomuniv
     *
     * @return string 
     */
    public function getNomuniv()
    {
        return $this->nomuniv;
    }

    /**
     * Set contactuniv
     *
     * @param string $contactuniv
     * @return Universite
     */
    public function setContactuniv($contactuniv)
    {
        $this->contactuniv = $contactuniv;

        return $this;
    }

    /**
     * Get contactuniv
     *
     * @return string 
     */
    public function getContactuniv()
    {
        return $this->contactuniv;
    }

    /**
     * Set addresseuniv
     *
     * @param string $addresseuniv
     * @return Universite
     */
    public function setAddresseuniv($addresseuniv)
    {
        $this->addresseuniv = $addresseuniv;

        return $this;
    }

    /**
     * Get addresseuniv
     *
     * @return string 
     */
    public function getAddresseuniv()
    {
        return $this->addresseuniv;
    }

    /**
     * Get iduniv
     *
     * @return integer 
     */
    public function getIduniv()
    {
        return $this->iduniv;
    }
}
