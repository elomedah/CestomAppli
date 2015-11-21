<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
 
use Symfony\Component\HttpFoundation\File\File;


/**
 * Bourse
 */
class Bourse
{
     /**
     * @var integer
     */
    private $idBourse;
    /**
     * @var string
     */
    private $anneeUniversitaire;

        
    /**
     * @var string
     */
    private $docBourse;

     /**
     * @var string
     */
    private $typeDoc;

    /**
     * @var string
     */
    private $etatDoc;
    
    /**
     * @var \Cestom\StoreBundle\Entity\Membre
     */
    private $idmembre;

    /**
     * @var File
     */
    private $fichierBourse;

    /**
     * @var \DateTime
     */
    private $misAJour;

    /**
     * @var \DateTime
     */
    private $dateCreation;

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
    public function setFichierBourse(File $image = null)
    {
        $this->fichierBourse = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->misAJour = new \DateTime('now');
        }
    }
	

    /**
     * @return File
     */
    public function getFichierBourse()
    {
        return $this->fichierBourse;
    }


    /**
     * Set misAJour
     *
     * @param \DateTime $misAJour
     * @return Bourse
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
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Bourse
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

   



    /**
     * Set docBourse
     *
     * @param string $docBourse
     * @return Bourse
     */
    public function setDocBourse($docBourse)
    {
        $this->docBourse = $docBourse;

        return $this;
    }

    /**
     * Get docBourse
     *
     * @return string 
     */
    public function getDocBourse()
    {
        return $this->docBourse;
    }

    /**
     * Set typeDoc
     *
     * @param string $typeDoc
     * @return Bourse
     */
    public function setTypeDoc($typeDoc)
    {
        $this->typeDoc = $typeDoc;

        return $this;
    }

    /**
     * Get typeDoc
     *
     * @return string 
     */
    public function getTypeDoc()
    {
        return $this->typeDoc;
    }
    /**
     * Set etatDoc
     *
     * @param string $etatDoc
     * @return Bourse
     */
    public function setEtatDoc($etatDoc)
    {
        $this->etatDoc = $etatDoc;

        return $this;
    }

    /**
     * Get etatDoc
     *
     * @return string 
     */
    public function getEtatDoc()
    {
        return $this->etatDoc;
    }
    /**
     * Set anneeUniversitaire
     *
     * @param string $anneeUniversitaire
     * @return Bourse
     */
    public function setAnneeUniversitaire($anneeUniversitaire)
    {
        $this->anneeUniversitaire = $anneeUniversitaire;

        return $this;
    }

    /**
     * Get anneeUniversitaire
     *
     * @return string 
     */
    public function getAnneeUniversitaire()
    {
        return $this->anneeUniversitaire;
    }    

    /**
     * Set idmembre
     *
     * @param \Cestom\StoreBundle\Entity\Membre $idmembre
     * @return Bourse
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
     /**
     * Get idBourse
     *
     * @return integer 
     */
    public function getIdBourse()
    {
        return $this->idBourse;
    }
}
