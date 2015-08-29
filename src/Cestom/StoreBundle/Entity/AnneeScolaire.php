<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnneeScolaire
 *
 * @ORM\Table(name="ANNEE_SCOLAIRE")
 * @ORM\Entity
 */
class AnneeScolaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="ANNEE_SCOLAIRE", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anneeScolaire;



    /**
     * Get anneeScolaire
     *
     * @return string 
     */
    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }
}
