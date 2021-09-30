<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contenuArticle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuArticle(): ?string
    {
        return $this->contenuArticle;
    }

    public function setContenuArticle(?string $contenuArticle): self
    {
        $this->contenuArticle = $contenuArticle;

        return $this;
    }
}
