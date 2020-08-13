<?php

namespace App\Entity;

use App\Repository\CompteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=ClientPhysique::class, inversedBy="comptes")
     */
    private $clientPhysique;

    /**
     * @ORM\ManyToOne(targetEntity=ClientMoral::class, inversedBy="comptes")
     */
    private $clientMoral;

    /**
     * @ORM\ManyToOne(targetEntity=TypeCompte::class, inversedBy="comptes")
     */
    private $typeCompte;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $numeroagence;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $numerocompte;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $clerib;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientPhysique(): ?ClientPhysique
    {
        return $this->clientPhysique;
    }

    public function setClientPhysique(?ClientPhysique $clientPhysique): self
    {
        $this->clientPhysique = $clientPhysique;

        return $this;
    }

    public function getClientMoral(): ?ClientMoral
    {
        return $this->clientMoral;
    }

    public function setClientMoral(?ClientMoral $clientMoral): self
    {
        $this->clientMoral = $clientMoral;

        return $this;
    }

    public function getTypeCompte(): ?TypeCompte
    {
        return $this->typeCompte;
    }

    public function setTypeCompte(?TypeCompte $typeCompte): self
    {
        $this->typeCompte = $typeCompte;

        return $this;
    }

    public function getNumeroagence(): ?string
    {
        return $this->numeroagence;
    }

    public function setNumeroagence(string $numeroagence): self
    {
        $this->numeroagence = $numeroagence;

        return $this;
    }

    public function getNumerocompte(): ?string
    {
        return $this->numerocompte;
    }

    public function setNumerocompte(string $numerocompte): self
    {
        $this->numerocompte = $numerocompte;

        return $this;
    }

    public function getClerib(): ?string
    {
        return $this->clerib;
    }

    public function setClerib(string $clerib): self
    {
        $this->clerib = $clerib;

        return $this;
    }
}
