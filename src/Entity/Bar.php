<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity   
 */
class Bar {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(length="100")
     */   
    private string $enseigne;

    /**
     * @ORM\Column(length="100")
     */
    private string $adress;

    public function __construct(string $adress, string $enseigne)
    {
       $this->enseigne = $enseigne;
       $this->adress = $adress;
    }
    

    /**
     * Get the value of id
     */ 
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName() : string
    {
        return $this->enseigne;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $enseigne) : self
    {
        $this->enseigne = $enseigne;

        return $this;
    }

    /**
     * Get the value of adress
     */ 
    public function getAdress() : string
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */ 
    public function setAdress(string $adress) : self
    {
        $this->adress = $adress;

        return $this;
    }
}