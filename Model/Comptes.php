<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="comptes")
 */


class Comptes
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
     * @ORM\Column(type="integer")
     */
    private $numero_compte;

    /**
     * @ORM\Column(type="integer")
     */
    private $solde;

    /**
         * Many compte have one client. This is the owning side.
         * @ORM\ManyToOne(targetEntity="Clients", inversedBy="comptes")
         * @ORM\JoinColumn(name="client", referencedColumnName="id")
         */
    private $client;

    /**
    * One compte has many operations. This is the inverse side.
    * @ORM\ManyToMany(targetEntity="Operations", mappedBy="comptes")
    */
    private $operations;

 

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
     * Get the value of numero_compte
     */ 
    public function getNumero_compte()
    {
        return $this->numero_compte;
    }

    /**
     * Set the value of numero_compte
     *
     * @return  self
     */ 
    public function setNumero_compte($numero_compte)
    {
        $this->numero_compte = $numero_compte;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get many compte have one client. This is the owning side.
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set many compte have one client. This is the owning side.
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get one compte has many operations. This is the inverse side.
     */ 
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Set one compte has many operations. This is the inverse side.
     *
     * @return  self
     */ 
    public function setOperations($operations)
    {
        $this->operations = $operations;

        return $this;
    }
}


?>