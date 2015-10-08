<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VilleMembre
 *
 * @ORM\Table(name="VILLE_MEMBRE", uniqueConstraints={@ORM\UniqueConstraint(name="IDVILLE", columns={"IDVILLE", "IDMEMBRE", "DATE_DEBUT"})}, indexes={@ORM\Index(name="FK_VILLE_MEMBRE2", columns={"IDMEMBRE"}), @ORM\Index(name="IDX_BAD8C10FAA834BC0", columns={"IDVILLE"})})
 * @ORM\Entity
 */
class VilleMembre
{
    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=512, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_DEBUT", type="string", length=20, nullable=true)
     */
    private $dateDebut;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDVILLEMEMBRE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvillemembre;

    /**
     * @var \Cestom\StoreBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="Cestom\StoreBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDVILLE", referencedColumnName="IDVILLE")
     * })
     */
    private $idville;

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
}
