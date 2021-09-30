<?php

namespace App\Entity;

use App\Repository\CoachingsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoachingsRepository::class)
 */
class Coachings
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCoaching;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Prix_unitaire_coaching;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCoaching(): ?string
    {
        return $this->nomCoaching;
    }

    public function setNomCoaching(string $nomCoaching): self
    {
        $this->nomCoaching = $nomCoaching;

        return $this;
    }

    public function getPrixUnitaireCoaching(): ?float
    {
        return $this->Prix_unitaire_coaching;
    }

    public function setPrixUnitaireCoaching(?float $Prix_unitaire_coaching): self
    {
        $this->Prix_unitaire_coaching = $Prix_unitaire_coaching;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
