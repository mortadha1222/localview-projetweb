<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits")
 * @ORM\Entity
 */
class Produits
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=20, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description_prod", type="string", length=100, nullable=false)
     */
    private $descriptionProd;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_prod", type="string", length=1000, nullable=false)
     */
    private $photoProd;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer", nullable=false)
     */
    private $stock;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_vendor", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idVendor = NULL;

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescriptionProd(): ?string
    {
        return $this->descriptionProd;
    }

    public function setDescriptionProd(string $descriptionProd): self
    {
        $this->descriptionProd = $descriptionProd;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPhotoProd(): ?string
    {
        return $this->photoProd;
    }

    public function setPhotoProd(string $photoProd): self
    {
        $this->photoProd = $photoProd;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

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
