<?php

namespace App\Entity;

use App\Repository\ClientMoralRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientMoralRepository::class)
 */
class ClientMoral
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=ClientPhysique::class, mappedBy="clientMoral")
     */
    private $clientphysiques;

    /**
     * @ORM\OneToMany(targetEntity=Compte::class, mappedBy="clientMoral")
     */
    private $comptes;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nomentreprise;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $adresseentreprise;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $raisonsocial;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $numident;

    public function __construct()
    {
        $this->clientphysiques = new ArrayCollection();
        $this->comptes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|ClientPhysique[]
     */
    public function getClientphysiques(): Collection
    {
        return $this->clientphysiques;
    }

    public function addClientphysique(ClientPhysique $clientphysique): self
    {
        if (!$this->clientphysiques->contains($clientphysique)) {
            $this->clientphysiques[] = $clientphysique;
            $clientphysique->setClientMoral($this);
        }

        return $this;
    }

    public function removeClientphysique(ClientPhysique $clientphysique): self
    {
        if ($this->clientphysiques->contains($clientphysique)) {
            $this->clientphysiques->removeElement($clientphysique);
            // set the owning side to null (unless already changed)
            if ($clientphysique->getClientMoral() === $this) {
                $clientphysique->setClientMoral(null);
            }
        }

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
            $compte->setClientMoral($this);
        }

        return $this;
    }

    public function removeCompte(Compte $compte): self
    {
        if ($this->comptes->contains($compte)) {
            $this->comptes->removeElement($compte);
            // set the owning side to null (unless already changed)
            if ($compte->getClientMoral() === $this) {
                $compte->setClientMoral(null);
            }
        }

        return $this;
    }

    public function getNomentreprise(): ?string
    {
        return $this->nomentreprise;
    }

    public function setNomentreprise(string $nomentreprise): self
    {
        $this->nomentreprise = $nomentreprise;

        return $this;
    }

    public function getAdresseentreprise(): ?string
    {
        return $this->adresseentreprise;
    }

    public function setAdresseentreprise(string $adresseentreprise): self
    {
        $this->adresseentreprise = $adresseentreprise;

        return $this;
    }

    public function getRaisonsocial(): ?string
    {
        return $this->raisonsocial;
    }

    public function setRaisonsocial(string $raisonsocial): self
    {
        $this->raisonsocial = $raisonsocial;

        return $this;
    }

    public function getNumident(): ?string
    {
        return $this->numident;
    }

    public function setNumident(string $numident): self
    {
        $this->numident = $numident;

        return $this;
    }
}
