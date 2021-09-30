<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaiementRepository::class)
 */
class Paiement
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
    private $dateDePaiement;

    /**
     * @ORM\Column(type="float")
     */
    private $montantPaye;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDePaiement(): ?\DateTimeInterface
    {
        return $this->dateDePaiement;
    }

    public function setDateDePaiement(\DateTimeInterface $dateDePaiement): self
    {
        $this->dateDePaiement = $dateDePaiement;

        return $this;
    }

    public function getMontantPaye(): ?float
    {
        return $this->montantPaye;
    }

    public function setMontantPaye(float $montantPaye): self
    {
        $this->montantPaye = $montantPaye;

        return $this;
    }
}
