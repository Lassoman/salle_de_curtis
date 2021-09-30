<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDeReservation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etatReservation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDeReservation(): ?\DateTimeInterface
    {
        return $this->dateDeReservation;
    }

    public function setDateDeReservation(\DateTimeInterface $dateDeReservation): self
    {
        $this->dateDeReservation = $dateDeReservation;

        return $this;
    }

    public function getEtatReservation(): ?string
    {
        return $this->etatReservation;
    }

    public function setEtatReservation(string $etatReservation): self
    {
        $this->etatReservation = $etatReservation;

        return $this;
    }
}
