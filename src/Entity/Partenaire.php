<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PartenaireRepository")
 */
class Partenaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $identifiant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroIdentite;

    /**
     * @ORM\Column(type="integer")
     */
    private $contact;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SousPartenaire", mappedBy="idIdentifiant")
     */
    private $sousPartenaires;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AdminSysteme")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idPartenaire;

    public function __construct()
    {
        $this->sousPartenaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(string $identifiant): self
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getNumeroIdentite(): ?int
    {
        return $this->numeroIdentite;
    }

    public function setNumeroIdentite(int $numeroIdentite): self
    {
        $this->numeroIdentite = $numeroIdentite;

        return $this;
    }

    public function getContact(): ?int
    {
        return $this->contact;
    }

    public function setContact(int $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection|SousPartenaire[]
     */
    public function getSousPartenaires(): Collection
    {
        return $this->sousPartenaires;
    }

    public function addSousPartenaire(SousPartenaire $sousPartenaire): self
    {
        if (!$this->sousPartenaires->contains($sousPartenaire)) {
            $this->sousPartenaires[] = $sousPartenaire;
            $sousPartenaire->setIdIdentifiant($this);
        }

        return $this;
    }

    public function removeSousPartenaire(SousPartenaire $sousPartenaire): self
    {
        if ($this->sousPartenaires->contains($sousPartenaire)) {
            $this->sousPartenaires->removeElement($sousPartenaire);
            // set the owning side to null (unless already changed)
            if ($sousPartenaire->getIdIdentifiant() === $this) {
                $sousPartenaire->setIdIdentifiant(null);
            }
        }

        return $this;
    }

    public function getIdPartenaire(): ?AdminSysteme
    {
        return $this->idPartenaire;
    }

    public function setIdPartenaire(?AdminSysteme $idPartenaire): self
    {
        $this->idPartenaire = $idPartenaire;

        return $this;
    }
}
