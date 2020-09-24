<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="operation")
 */

class Operations
{

    
    public function __construct()
    {
        $this->comptes = new ArrayCollection();
    }


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelles;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    
         /**
         * Many operation have one compte. This is the owning side.
         * @ORM\ManyToMany(targetEntity="Comptes", inversedBy="operations")
         * @ORM\JoinColumn(name="comptes", referencedColumnName="id")
         */
    private $comptes;

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelles
     */ 
    public function getLibelles()
    {
        return $this->libelles;
    }

    /**
     * Set the value of libelles
     *
     * @return  self
     */ 
    public function setLibelles($libelles)
    {
        $this->libelles = $libelles;

        return $this;
    }

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get many operation have one compte. This is the owning side.
     */ 
    public function getComptes()
    {
        return $this->comptes;
    }

    /**
     * Set many operation have one compte. This is the owning side.
     *
     * @return  self
     */ 
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }
}

?>