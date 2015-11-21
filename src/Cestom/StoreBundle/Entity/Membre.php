<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
 
use Symfony\Component\HttpFoundation\File\File;


/**
 * Membre
 */
class Membre
{
    /**
     * @var string
     */
    private $sexe;

    /**
     * @var string
     */
    private $nomMembre;

    /**
     * @var string
     */
    private $prenomMembre;

    /**
     * @var string
     */
    private $numeroPassportMembre;

    /**
     * @var string
     */
    private $dateExpiMembre;

    /**
     * @var string
     */
    private $dateEtabMembre;

    /**
     * @var integer
     */
    private $promotionMembre;

    /**
     * @var string
     */
    private $dateNaissanceMembre;

    /**
     * @var string
     */
    private $contactUrgence;

    /**
     * @var string
     */
    private $telephonefirst;

    /**
     * @var string
     */
    private $telephonesecond;

    /**
     * @var string
     */
    private $infoComplementmembre;

    /**
     * @var string
     */
    private $photoMimMembre;

    /**
     * @var string
     */
    private $dernierLyceeFrequente;

    /**
     * @var integer
     */
    private $idmembre;

    /**
     * @var \Cestom\UserBundle\Entity\User
     */
    private $id;


    /**
     * @var File
     */
    private $fichierPhotoMimMembre;

    /**
     * @var \DateTime
     */
    private $misAJour;



    public function __construct()
    {
		$this->misAJour = new \DateTime();
    }

	
	/**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */
    public function setFichierPhotoMimMembre(File $image = null)
    {
        $this->fichierPhotoMimMembre = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->misAJour = new \DateTime('now');
        }
    }
	

    /**
     * @return File
     */
    public function getFichierPhotoMimMembre()
    {
        return $this->fichierPhotoMimMembre;
    }


    /**
     * Set misAJour
     *
     * @param \DateTime $misAJour
     * @return User
     */
    public function setMisAJour($misAJour)
    {
        $this->misAJour = $misAJour;

        return $this;
    }

    /**
     * Get misAJour
     *
     * @return \DateTime 
     */
    public function getMisAJour()
    {
        return $this->misajour;
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
     * Set telephonefirst
     *
     * @param string $telephonefirst
     * @return Membre
     */
    public function setTelephonefirst($telephonefirst)
    {
        $this->telephonefirst = $telephonefirst;

        return $this;
    }

    /**
     * Get telephonefirst
     *
     * @return string 
     */
    public function getTelephonefirst()
    {
        return $this->telephonefirst;
    }

    /**
     * Set telephonesecond
     *
     * @param string $telephonesecond
     * @return Membre
     */
    public function setTelephonesecond($telephonesecond)
    {
        $this->telephonesecond = $telephonesecond;

        return $this;
    }

    /**
     * Get telephonesecond
     *
     * @return string 
     */
    public function getTelephonesecond()
    {
        return $this->telephonesecond;
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

    /**
     * Set id
     *
     * @param \Cestom\UserBundle\Entity\User $id
     * @return Membre
     */
    public function setId(\Cestom\UserBundle\Entity\User $id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \Cestom\UserBundle\Entity\User 
     */
    public function getId()
    {
        return $this->id;
    }
}
