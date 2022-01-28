<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ORM\Entity
 */
final class Cat {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $puceNum;

    /**
     * @ORM\Column(length="100")
     */
    private string $description;

    /**
     * @ORM\ManyToOne(targetEntity="Bar")
     * @ORM\JoinColumn(name="adress", referencedColumnName="adress")
     */
    private Bar $adress;

    /**
     * @ORM\ManyToOne(targetEntity="Bar")
     * @ORM\JoinColumn(name="enseigne", referencedColumnName="enseigne")
     */
    private Bar $enseigne;

     /**
     * @ORM\Column(length="100")
     */
    private string $statut;

    public function __construct(int $puceNum, string $description, Bar $adress, Bar $enseigne, string $statut)
    {
        $this->puceNum = $puceNum;
        $this->description = $description;
        $this->adress = $adress;
        $this->enseigne = $enseigne;
        $this->statut = $statut;
    }


    /**
     * Get the value of id
     */ 
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Get the value of puceNum
     */ 
    public function getPuceNum() : int
    {
        return $this->puceNum;
    }

    /**
     * Set the value of puceNum
     *
     * @return  self
     */ 
    public function setPuceNum(int $puceNum) : self
    {
        $this->puceNum = $puceNum;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description) : self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of adress
     */ 
    public function getAdress() : Bar
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

    /**
     * Get the value of enseigne
     */ 
    public function getEnseigne() : Bar
    {
        return $this->enseigne;
    }

    /**
     * Set the value of enseigne
     *
     * @return  self
     */ 
    public function setEnseigne(string $enseigne) : self
    {
        $this->enseigne = $enseigne;

        return $this;
    }

    /**
     * Get the value of statut
     */ 
    public function getStatut() : string
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */ 
    public function setStatut(string $statut) : self
    {
        $this->statut = $statut;

        return $this;
    }
}