<?php

namespace App\Entity;

use App\Repository\DiscountRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DiscountRepository::class)
 */
class Discount
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite_min;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite_max;

    /**
     * @ORM\Column(type="integer")
     */
    private $coeficient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantiteMin(): ?int
    {
        return $this->quantite_min;
    }

    public function setQuantiteMin(int $quantite_min): self
    {
        $this->quantite_min = $quantite_min;

        return $this;
    }

    public function getQuantiteMax(): ?int
    {
        return $this->quantite_max;
    }

    public function setQuantiteMax(int $quantite_max): self
    {
        $this->quantite_max = $quantite_max;

        return $this;
    }

    public function getCoeficient(): ?int
    {
        return $this->coeficient;
    }

    public function setCoeficient(int $coeficient): self
    {
        $this->coeficient = $coeficient;

        return $this;
    }
}
