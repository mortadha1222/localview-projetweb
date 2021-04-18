<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

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

    private $userName ;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor_name", type="string", length=20, nullable=false)
     */
    private $vendorName;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_livraison", type="string", length=60)
     * @Assert\NotBlank(message="Adress is required")
     */
    private $adresseLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer", nullable=false)
     */
    private $total=90;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser=1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_vendor", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idVendor = 1;

    /**
     * @return int
     */
    public function getIdCommande(): int
    {
        return $this->idCommande;
    }

    /**
     * @param int $idCommande
     */
    public function setIdCommande(int $idCommande): void
    {
        $this->idCommande = $idCommande;
    }

    /**
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getVendorName(): ?string
    {
        return $this->vendorName;
    }

    /**
     * @param string $vendorName
     */
    public function setVendorName(string $vendorName): void
    {
        $this->vendorName = $vendorName;
    }

    /**
     * @return string
     */
    public function getAdresseLivraison(): ?string
    {
        return $this->adresseLivraison;
    }

    /**
     * @param string $adresseLivraison
     */
    public function setAdresseLivraison(string $adresseLivraison): void
    {
        $this->adresseLivraison = $adresseLivraison;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     */
    public function setIdUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }

    /**
     * @return int|null
     */
    public function getIdVendor(): ?int
    {
        return $this->idVendor;
    }

    /**
     * @param int|null $idVendor
     */
    public function setIdVendor(?int $idVendor): void
    {
        $this->idVendor = $idVendor;
    }


}
