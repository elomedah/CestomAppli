<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Experience
 *
 * @ORM\Table(name="EXPERIENCE")
 * @Vich\Uploadable
 */

class Experience{
    /**
     * @var string
	 * @ORM\Column(name="LIBELLE_EXPERIENCE", type="string", length="225")
	 * @ORM\Libele_experience
     */
    private $libelleExperience;

    /**
     * @var string
	 * @ORM\Column(name="SOCIETE", type="string", length="225")
     */
    private $societe;

    /**
     * @var string
	 * @ORM\Column(name="DATE_DEBUT_EXPERIENCE", type="string", length="225")
     */
    private $dateDebutExperience;

    /**
     * @var string
	 * @ORM\Column(name="DATE_FIN_EXPERIENCE", type="string", length="225")
     */
    private $dateFinExperience;

    /**
     * @var string
	 * @ORM\Column(name="COMPETENCE_ACQUISE_EXPERIENCE", type="string", length="1000")
     */
    private $competenceAcquise;

    /**
     * @var integer
     * @ORM\Column(name="ID_EXPERIENCE", type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
    private $idExperience;

    /**
     * @var \Cestom\StoreBundle\Entity\Membre
	 * @ORM\ManyToOne(targetEntity="\Cestom\StoreBundle\Entity\Membre", inversedBy="Experience")
	 * @ORM\JoinColumns({
	 *    @ORM\JoinColumn(name="Membre", referencedColumnName="idmembre", nullable=false)
	* })
     */
    private $idmembre;
	
	/**Construct**/
	public function __construct(){
		
	}
	/***FUNCTIONS***/
	
	/**seteurs**/
	
	/**geteurs**/
}