<?php

namespace App\Entity;

use App\Repository\CodePostalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CodePostalRepository::class)
 */
class CodePostal
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
    private $lib_cp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibCp(): ?int
    {
        return $this->lib_cp;
    }

    public function setLibCp(int $lib_cp): self
    {
        $this->lib_cp = $lib_cp;

        return $this;
    }
}
