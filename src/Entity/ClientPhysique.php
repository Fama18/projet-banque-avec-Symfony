<?php

namespace App\Entity;

use App\Repository\ClientPhysiqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientPhysiqueRepository::class)
 */
class ClientPhysique
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $numCni;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $civilite;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $telephone;

    /**
     * @ORM\ManyToOne(targetEntity=ClientMoral::class, inversedBy="clientphysiques")
     */
    private $clientMoral;

    /**
     * @ORM\OneToMany(targetEntity=Compte::class, mappedBy="clientPhysique")
     */
    private $comptes;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $datenaissance;

    public function __construct()
    {
        $this->comptes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumCni(): ?string
    {
        return $this->numCni;
    }

    public function setNumCni(string $numCni): self
    {
        $this->numCni = $numCni;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): self
    {
        $this->civilite = $civilite;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

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

    /**
     * @return Collection|Compte[]
     */
    public function getComptes(): Collection
    {
        return $this->comptes;
    }

    public function addCompte(Compte $compte): self
    {
        if (!$this->comptes->contains($compte)) {
            $this->comptes[] = $compte;
            $compte->setClientPhysique($this);
        }

        return $this;
    }

    public function removeCompte(Compte $compte): self
    {
        if ($this->comptes->contains($compte)) {
            $this->comptes->removeElement($compte);
            // set the owning side to null (unless already changed)
            if ($compte->getClientPhysique() === $this) {
                $compte->setClientPhysique(null);
            }
        }

        return $this;
    }

    public function getDatenaissance(): ?string
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(string $datenaissance): self
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }
}
