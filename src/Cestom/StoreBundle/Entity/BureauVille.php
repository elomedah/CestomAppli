<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BureauVille
 *
 * @ORM\Table(name="BUREAU_VILLE", indexes={@ORM\Index(name="FK_BUREAU_VILLE2", columns={"IDMEMBRE"}), @ORM\Index(name="FK_BUREAU_VILLE3", columns={"ANNEE_SCOLAIRE"}), @ORM\Index(name="IDX_9C37DC74AA834BC0", columns={"IDVILLE"})})
 * @ORM\Entity
 */
class BureauVille
{
    /**
     * @var string
     *
     * @ORM\Column(name="POSTE_MEMBRE", type="string", length=255, nullable=false)
     */
    private $posteMembre;

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
     * @var \Cestom\StoreBundle\Entity\Ville
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Cestom\StoreBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDVILLE", referencedColumnName="IDVILLE")
     * })
     */
    private $idville;

    /**
     * @var \Cestom\StoreBundle\Entity\AnneeScolaire
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Cestom\StoreBundle\Entity\AnneeScolaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ANNEE_SCOLAIRE", referencedColumnName="ANNEE_SCOLAIRE")
     * })
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
