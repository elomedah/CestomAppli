<?php

namespace Cestom\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * lienExterne
 *
 * @ORM\Table(name="article_lien")
 * @ORM\Entity(repositoryClass="Cestom\ArticleBundle\Entity\Repository\LienRepository")
 */
class Lien
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
     * @ORM\Column(name="lien", type="string", length=255)
     */
    private $lien;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

	/**
	* @var Article
	*
	* @ORM\ManyToOne(targetEntity="Article", inversedBy="liens")
	* @ORM\JoinColumns({
	*    @ORM\JoinColumn(name="article", referencedColumnName="id", nullable=false)
	* })
	*/
    private $article;


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
     * Set lien
     *
     * @param string $lien
     * @return lienExterne
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string 
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return lienExterne
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
     * Set article
     *
     * @param \stdClass $article
     * @return lienExterne
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \stdClass 
     */
    public function getArticle()
    {
        return $this->article;
    }
}
