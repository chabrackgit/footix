<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipeRepository::class)]
class Equipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $division = null;

    #[ORM\OneToOne(mappedBy: 'equipe', cascade: ['persist', 'remove'])]
    private ?Entraineur $entraineur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDivision(): ?string
    {
        return $this->division;
    }

    public function setDivision(string $division): self
    {
        $this->division = $division;

        return $this;
    }

    public function getEntraineur(): ?Entraineur
    {
        return $this->entraineur;
    }

    public function setEntraineur(?Entraineur $entraineur): self
    {
        // unset the owning side of the relation if necessary
        if ($entraineur === null && $this->entraineur !== null) {
            $this->entraineur->setEquipe(null);
        }

        // set the owning side of the relation if necessary
        if ($entraineur !== null && $entraineur->getEquipe() !== $this) {
            $entraineur->setEquipe($this);
        }

        $this->entraineur = $entraineur;

        return $this;
    }
}
