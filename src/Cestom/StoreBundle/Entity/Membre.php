<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 *
 * @ORM\Table(name="MEMBRE")
 * @ORM\Entity
 */
class Membre
{
    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_MEMBRE", type="string", length=255, nullable=false)
     */
    private $emailMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=1024, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="SEXE", type="string", length=1, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="USERNAME", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_MEMBRE", type="string", length=255, nullable=true)
     */
    private $nomMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM_MEMBRE", type="string", length=255, nullable=true)
     */
    private $prenomMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMERO_PASSPORT_MEMBRE", type="string", length=15, nullable=true)
     */
    private $numeroPassportMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_EXPI_MEMBRE", type="string", length=255, nullable=true)
     */
    private $dateExpiMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_ETAB_MEMBRE", type="string", length=255, nullable=true)
     */
    private $dateEtabMembre;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROMOTION_MEMBRE", type="integer", nullable=true)
     */
    private $promotionMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_NAISSANCE_MEMBRE", type="string", length=255, nullable=true)
     */
    private $dateNaissanceMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT_URGENCE", type="string", length=2048, nullable=true)
     */
    private $contactUrgence;

    /**
     * @var string
     *
     * @ORM\Column(name="INFO_COMPLEMENTMEMBRE", type="string", length=4096, nullable=true)
     */
    private $infoComplementmembre;

    /**
     * @var string
     *
     * @ORM\Column(name="PHOTO_MIM_MEMBRE", type="blob", nullable=true)
     */
    private $photoMimMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="DERNIER_LYCEE_FREQUENTE", type="string", length=255, nullable=true)
     */
    private $dernierLyceeFrequente;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDMEMBRE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmembre;



    /**
     * Set emailMembre
     *
     * @param string $emailMembre
     * @return Membre
     */
    public function setEmailMembre($emailMembre)
    {
        $this->emailMembre = $emailMembre;

        return $this;
    }

    /**
     * Get emailMembre
     *
     * @return string 
     */
    public function getEmailMembre()
    {
        return $this->emailMembre;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Membre
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Membre
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Membre
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set nomMembre
     *
     * @param string $nomMembre
     * @return Membre
     */
    public function setNomMembre($nomMembre)
    {
        $this->nomMembre = $nomMembre;

        return $this;
    }

    /**
     * Get nomMembre
     *
     * @return string 
     */
    public function getNomMembre()
    {
        return $this->nomMembre;
    }

    /**
     * Set prenomMembre
     *
     * @param string $prenomMembre
     * @return Membre
     */
    public function setPrenomMembre($prenomMembre)
    {
        $this->prenomMembre = $prenomMembre;

        return $this;
    }

    /**
     * Get prenomMembre
     *
     * @return string 
     */
    public function getPrenomMembre()
    {
        return $this->prenomMembre;
    }

    /**
     * Set numeroPassportMembre
     *
     * @param string $numeroPassportMembre
     * @return Membre
     */
    public function setNumeroPassportMembre($numeroPassportMembre)
    {
        $this->numeroPassportMembre = $numeroPassportMembre;

        return $this;
    }

    /**
     * Get numeroPassportMembre
     *
     * @return string 
     */
    public function getNumeroPassportMembre()
    {
        return $this->numeroPassportMembre;
    }

    /**
     * Set dateExpiMembre
     *
     * @param string $dateExpiMembre
     * @return Membre
     */
    public function setDateExpiMembre($dateExpiMembre)
    {
        $this->dateExpiMembre = $dateExpiMembre;

        return $this;
    }

    /**
     * Get dateExpiMembre
     *
     * @return string 
     */
    public function getDateExpiMembre()
    {
        return $this->dateExpiMembre;
    }

    /**
     * Set dateEtabMembre
     *
     * @param string $dateEtabMembre
     * @return Membre
     */
    public function setDateEtabMembre($dateEtabMembre)
    {
        $this->dateEtabMembre = $dateEtabMembre;

        return $this;
    }

    /**
     * Get dateEtabMembre
     *
     * @return string 
     */
    public function getDateEtabMembre()
    {
        return $this->dateEtabMembre;
    }

    /**
     * Set promotionMembre
     *
     * @param integer $promotionMembre
     * @return Membre
     */
    public function setPromotionMembre($promotionMembre)
    {
        $this->promotionMembre = $promotionMembre;

        return $this;
    }

    /**
     * Get promotionMembre
     *
     * @return integer 
     */
    public function getPromotionMembre()
    {
        return $this->promotionMembre;
    }

    /**
     * Set dateNaissanceMembre
     *
     * @param string $dateNaissanceMembre
     * @return Membre
     */
    public function setDateNaissanceMembre($dateNaissanceMembre)
    {
        $this->dateNaissanceMembre = $dateNaissanceMembre;

        return $this;
    }

    /**
     * Get dateNaissanceMembre
     *
     * @return string 
     */
    public function getDateNaissanceMembre()
    {
        return $this->dateNaissanceMembre;
    }

    /**
     * Set contactUrgence
     *
     * @param string $contactUrgence
     * @return Membre
     */
    public function setContactUrgence($contactUrgence)
    {
        $this->contactUrgence = $contactUrgence;

        return $this;
    }

    /**
     * Get contactUrgence
     *
     * @return string 
     */
    public function getContactUrgence()
    {
        return $this->contactUrgence;
    }

    /**
     * Set infoComplementmembre
     *
     * @param string $infoComplementmembre
     * @return Membre
     */
    public function setInfoComplementmembre($infoComplementmembre)
    {
        $this->infoComplementmembre = $infoComplementmembre;

        return $this;
    }

    /**
     * Get infoComplementmembre
     *
     * @return string 
     */
    public function getInfoComplementmembre()
    {
        return $this->infoComplementmembre;
    }

    /**
     * Set photoMimMembre
     *
     * @param string $photoMimMembre
     * @return Membre
     */
    public function setPhotoMimMembre($photoMimMembre)
    {
        $this->photoMimMembre = $photoMimMembre;

        return $this;
    }

    /**
     * Get photoMimMembre
     *
     * @return string 
     */
    public function getPhotoMimMembre()
    {
        return $this->photoMimMembre;
    }

    /**
     * Set dernierLyceeFrequente
     *
     * @param string $dernierLyceeFrequente
     * @return Membre
     */
    public function setDernierLyceeFrequente($dernierLyceeFrequente)
    {
        $this->dernierLyceeFrequente = $dernierLyceeFrequente;

        return $this;
    }

    /**
     * Get dernierLyceeFrequente
     *
     * @return string 
     */
    public function getDernierLyceeFrequente()
    {
        return $this->dernierLyceeFrequente;
    }

    /**
     * Get idmembre
     *
     * @return integer 
     */
    public function getIdmembre()
    {
        return $this->idmembre;
    }
}
