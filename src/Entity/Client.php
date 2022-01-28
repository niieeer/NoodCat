<?php

namespace App\Entity;

use \DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Client extends User
{

    /**
     * @ORM\Column(type="string")
     */
    private string $identityCard;

    public function __construct(string $lastname, string $firstname, string $email, string $password, DateTime $dateInscription, string $identityCard)
    {
        parent::__construct($lastname, $firstname, $email, $password, $dateInscription);

        $this->identityCard = $identityCard;
    }

    /**
     * Get the value of IdentityCard
     */
    public function getIdentityCard(): string
    {
        return $this->identityCard;
    }

    /**
     * Set the value of IdentityCard
     *
     * @return  self
     */
    public function setIdentityCard(string $identityCard): self
    {
        $this->identityCard = $identityCard;

        return $this;
    }
}
