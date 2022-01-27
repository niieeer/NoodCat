<?php

namespace App\Entity;

class Bar {

    private int $id;    
    private string $name;
    private string $adress;

    public function __construct(string $adress, string $name)
    {
       $this->name = $name;
       $this->adress = $adress;

       $this->id = random_int(1,999999);
    }
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of adress
     */ 
    public function getAdress()
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