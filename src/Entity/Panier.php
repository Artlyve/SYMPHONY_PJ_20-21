<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="im2021_panier")
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class, inversedBy="paniers")
     * @ORM\JoinColumn(name="Produit_Id", referencedColumnName="id", nullable=false)
     */
    private $Produit;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="paniers")
     * @ORM\JoinColumn(name="User_id", referencedColumnName="id", nullable=false)
     */
    private $User;

    /**
     * @ORM\Column(type="integer")
     */
    private $Quantite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduit(): ?Produit
    {
        return $this->Produit;
    }

    public function setProduit($Produit): self
    {
        $this->Produit = $Produit;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser($User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->Quantite;
    }

    public function setQuantite(int $Quantite): self
    {
        $this->Quantite = $Quantite;

        return $this;
    }
}
