<?php

namespace Cestom\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="article_pays")
 * @ORM\Entity(repositoryClass="Cestom\ArticleBundle\Entity\Repository\PaysRepository")
 */
class Pays
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
     * @ORM\Column(name="pays", type="string", length=50)
     */
    private $pays;


    /**
     * @var \Doctrine\Common\Collections\Collection
     * @ORM\OneToMany (targetEntity="Article", mappedBy="pays", cascade={"ALL"})
     */

    private $articles;


    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set pays
     *
     * @param string $pays
     * @return Pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Add articles
     *
     * @param \Cestom\ArticleBundle\Entity\Article $articles
     * @return Pays
     */
    public function addArticle(\Cestom\ArticleBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;

        return $this;
    }

    /**
     * Remove articles
     *
     * @param \Cestom\ArticleBundle\Entity\Article $articles
     */
    public function removeArticle(\Cestom\ArticleBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }
}
