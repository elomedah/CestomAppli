<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telephone
 *
 * @ORM\Table(name="TELEPHONE", indexes={@ORM\Index(name="FK_TELEPHONE_MEMBRE", columns={"IDMEMBRE"})})
 * @ORM\Entity
 */
class Telephone
{
    /**
     * @var string
     *
     * @ORM\Column(name="NUMERO_TEL", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numeroTel;

    /**
     * @var \Cestom\StoreBundle\Entity\Membre
     *
     * @ORM\ManyToOne(targetEntity="Cestom\StoreBundle\Entity\Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMEMBRE", referencedColumnName="IDMEMBRE")
     * })
     */
    private $idmembre;



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
     * Set idmembre
     *
     * @param \Cestom\StoreBundle\Entity\Membre $idmembre
     * @return Telephone
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
