<?php

namespace App\Entity;

use \DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * ORM\Entity
 */
class Client extends User
{

    /**
     * @ORM\Column(type="integer")
     */
    private int $identityCard;

    public function __construct(string $lastname, string $firstname, string $email, string $password, DateTime $dateInscription, int $identityCard)
    {
        parent::__construct($lastname, $firstname, $email, $password, $dateInscription);

        $this->identityCard = $identityCard;
    }

    /**
     * Get the value of IdentityCard
     */
    public function getIdentityCard(): int
    {
        return $this->identityCard;
    }

    /**
     * Set the value of IdentityCard
     *
     * @return  self
     */
    public function setIdentityCard(int $identityCard): self
    {
        $this->identityCard = $identityCard;

        return $this;
    }
}
