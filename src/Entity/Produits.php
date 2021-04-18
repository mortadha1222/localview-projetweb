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

    /**
     * @return int
     */
    public function getIdProduct(): int
    {
        return $this->idProduct;
    }

    /**
     * @param int $idProduct
     */
    public function setIdProduct(int $idProduct): void
    {
        $this->idProduct = $idProduct;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescriptionProd(): string
    {
        return $this->descriptionProd;
    }

    /**
     * @param string $descriptionProd
     */
    public function setDescriptionProd(string $descriptionProd): void
    {
        $this->descriptionProd = $descriptionProd;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getPhotoProd(): string
    {
        return $this->photoProd;
    }

    /**
     * @param string $photoProd
     */
    public function setPhotoProd(string $photoProd): void
    {
        $this->photoProd = $photoProd;
    }

    /**
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     */
    public function setStock(int $stock): void
    {
        $this->stock = $stock;
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
