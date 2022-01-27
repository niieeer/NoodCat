<?php

namespace App\Entity;

use \DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * ORM\Entity
 */
final class Reservation
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;
    /**
     * @ORM\Column(type="datetime")
     */
    private DateTime $ReservationTime;

    public function __construct(DateTime $ReservationTime)
    {
        $this->ReservationTime = $ReservationTime;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of ReservationTime
     */
    public function getReservationTime(): DateTime
    {
        return $this->ReservationTime;
    }

    /**
     * Set the value of ReservationTime
     *
     * @return  self
     */
    public function setReservationTime(DateTime $ReservationTime)
    {
        $this->ReservationTime = $ReservationTime;

        return $this;
    }
}
