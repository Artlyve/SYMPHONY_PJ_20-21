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
  /*  /**
     *
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    //private $id;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="paniers", cascade={"persist"})
     * @ORM\JoinColumn(name="User_id", referencedColumnName="pk", nullable=false)
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class, inversedBy="paniers", cascade={"persist"})
     * @ORM\JoinColumn(name="Produit_Id", referencedColumnName="id", nullable=false)
     */
    private $Produit;



    /**
     * @ORM\Column(type="integer")
     */
    private $Quantite;



    public function getProduit(): ?Produit
    {
        return $this->Produit;
    }

    public function setProduit(Produit $Produit): self
    {
        $this->Produit = $Produit;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(User $User): self
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
