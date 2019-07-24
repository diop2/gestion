<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CaissierRepository")
 */
class Caissier
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
    private $nonComplet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $contact;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroIdentite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AdminSysteme", inversedBy="caissiers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idCaissier;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Versement", inversedBy="caissiers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $IDCaissier;

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

    public function getNonComplet(): ?string
    {
        return $this->nonComplet;
    }

    public function setNonComplet(string $nonComplet): self
    {
        $this->nonComplet = $nonComplet;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getNumeroIdentite(): ?int
    {
        return $this->numeroIdentite;
    }

    public function setNumeroIdentite(int $numeroIdentite): self
    {
        $this->numeroIdentite = $numeroIdentite;

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

    public function getIdCaissier(): ?AdminSysteme
    {
        return $this->idCaissier;
    }

    public function setIdCaissier(?AdminSysteme $idCaissier): self
    {
        $this->idCaissier = $idCaissier;

        return $this;
    }
}
