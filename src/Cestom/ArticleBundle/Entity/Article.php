<?php

namespace Cestom\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Article
 *
 * @ORM\Table(name="article_article")
 * @ORM\Entity(repositoryClass="Cestom\ArticleBundle\Entity\Repository\ArticleRepository")
 * @Vich\Uploadable
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="intro_img", type="string", length=255)
     */
    private $introImg;

    /**
     * @var File
     *
	 * @Vich\UploadableField(mapping="article_image", fileNameProperty="introImg")
     */
    private $introImgFile;


    /**
     * @ORM\Column(name="mis_a_jour", type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="full_img", type="string", length=255)
     */
    private $fullImg;

    /**
     * @var string
     *
     * @ORM\Column(name="introduction", type="text", length=160)
     */
    private $introduction;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="datetime")
     */
    private $creation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut_de_publication", type="datetime")
     */
    private $debutDePublication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_de_publication", type="datetime", nullable=true)
     */
    private $finDePublication;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @ORM\OneToMany (targetEntity="Lien", mappedBy="article", cascade={"ALL"})
     */

    private $liens;
	

	/**
	* @var Categorie
	*
	* @ORM\ManyToOne(targetEntity="Categorie", inversedBy="articles")
	* @ORM\JoinColumns({
	*    @ORM\JoinColumn(name="categorie", referencedColumnName="id", nullable=false)
	* })
	*/
    private $categorie;
	

	/**
	* @var Pays
	*
	* @ORM\ManyToOne(targetEntity="Pays", inversedBy="articles")
	* @ORM\JoinColumns({
	*    @ORM\JoinColumn(name="pays", referencedColumnName="id", nullable=false)
	* })
	*/
    private $pays;


    public function __construct()
    {
        $this->liens = new \Doctrine\Common\Collections\ArrayCollection();
		$this->creation = new \DateTime();
		$this->debutDePublication = new \DateTime();
		$this->finDePublication = null;
		$this->updatedAt = new \DateTime();
		$this->fullImg = "full.jpg";
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
    public function setIntroImgFile(File $image = null)
    {
        $this->introImgFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }
    }
	

    /**
     * @return File
     */
    public function getIntroImgFile()
    {
        return $this->introImgFile;
    }
	
	
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set introduction
     *
     * @param string $introduction
     * @return Article
     */
    public function setIntroduction($introduction)
    {
        $this->introduction = $introduction;

        return $this;
    }

    /**
     * Get introduction
     *
     * @return string 
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set creation
     *
     * @param \DateTime $creation
     * @return Article
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime 
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set debutDePublication
     *
     * @param \DateTime $debutDePublication
     * @return Article
     */
    public function setDebutDePublication($debutDePublication)
    {
        $this->debutDePublication = $debutDePublication;

        return $this;
    }

    /**
     * Get debutDePublication
     *
     * @return \DateTime 
     */
    public function getDebutDePublication()
    {
        return $this->debutDePublication;
    }

    /**
     * Set finDePublication
     *
     * @param \DateTime $finDePublication
     * @return Article
     */
    public function setFinDePublication($finDePublication)
    {
        $this->finDePublication = $finDePublication;

        return $this;
    }

    /**
     * Get finDePublication
     *
     * @return \DateTime 
     */
    public function getFinDePublication()
    {
        return $this->finDePublication;
    }

    /**
     * Set introImg
     *
     * @param string $introImg
     * @return Article
     */
    public function setIntroImg($introImg)
    {
        $this->introImg = $introImg;

        return $this;
    }

    /**
     * Get introImg
     *
     * @return string 
     */
    public function getIntroImg()
    {
        return $this->introImg;
    }

    /**
     * Set fullImg
     *
     * @param string $fullImg
     * @return Article
     */
    public function setFullImg($fullImg)
    {
        $this->fullImg = $fullImg;

        return $this;
    }

    /**
     * Get fullImg
     *
     * @return string 
     */
    public function getFullImg()
    {
        return $this->fullImg;
    }

    /**
     * Add liens
     *
     * @param \Cestom\ArticleBundle\Entity\Lien $liens
     * @return Article
     */
    public function addLien(\Cestom\ArticleBundle\Entity\Lien $liens)
    {
        $this->liens[] = $liens;
		$liens->setArticle($this);
        return $this;
    }

    /**
     * Remove liens
     *
     * @param \Cestom\ArticleBundle\Entity\Lien $liens
     */
    public function removeLien(\Cestom\ArticleBundle\Entity\Lien $liens)
    {
        $this->liens->removeElement($liens);
    }

    /**
     * Get liens
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLiens()
    {
        return $this->liens;
    }

    /**
     * Set categorie
     *
     * @param \Cestom\ArticleBundle\Entity\Categorie $categorie
     * @return Article
     */
    public function setCategorie(\Cestom\ArticleBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Cestom\ArticleBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set pays
     *
     * @param \Cestom\ArticleBundle\Entity\Pays $pays
     * @return Article
     */
    public function setPays(\Cestom\ArticleBundle\Entity\Pays $pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \Cestom\ArticleBundle\Entity\Pays 
     */
    public function getPays()
    {
        return $this->pays;
    }
}
