<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="vendor", columns={"id_vendor"}), @ORM\Index(name="user", columns={"id_user"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=20, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor_name", type="string", length=20, nullable=false)
     */
    private $vendorName;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_livraison", type="string", length=60, nullable=false)
     */
    private $adresseLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer", nullable=false)
     */
    private $total;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_vendor", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idVendor = NULL;

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getVendorName(): ?string
    {
        return $this->vendorName;
    }

    public function setVendorName(string $vendorName): self
    {
        $this->vendorName = $vendorName;

        return $this;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->adresseLivraison;
    }

    public function setAdresseLivraison(string $adresseLivraison): self
    {
        $this->adresseLivraison = $adresseLivraison;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdVendor(): ?int
    {
        return $this->idVendor;
    }

    public function setIdVendor(?int $idVendor): self
    {
        $this->idVendor = $idVendor;

        return $this;
    }


}
