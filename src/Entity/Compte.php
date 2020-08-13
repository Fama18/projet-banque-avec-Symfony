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

    /**
     * @ORM\ManyToOne(targetEntity=ClientPhysique::class, inversedBy="comptes")
     */
    private $clientphysique;

    /**
     * @ORM\ManyToOne(targetEntity=ClientMoral::class, inversedBy="comptes")
     */
    private $clientmoral;

    /**
     * @ORM\ManyToOne(targetEntity=TypeCompte::class, inversedBy="comptes")
     */
    private $typecompte;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getClientphysique(): ?ClientPhysique
    {
        return $this->clientphysique;
    }

    public function setClientphysique(?ClientPhysique $clientphysique): self
    {
        $this->clientphysique = $clientphysique;

        return $this;
    }

    public function getClientmoral(): ?ClientMoral
    {
        return $this->clientmoral;
    }

    public function setClientmoral(?ClientMoral $clientmoral): self
    {
        $this->clientmoral = $clientmoral;

        return $this;
    }

    public function getTypecompte(): ?TypeCompte
    {
        return $this->typecompte;
    }

    public function setTypecompte(?TypeCompte $typecompte): self
    {
        $this->typecompte = $typecompte;

        return $this;
    }

}
