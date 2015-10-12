<?php

namespace Cestom\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnneeScolaire
 */
class AnneeScolaire
{
    /**
     * @var string
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
