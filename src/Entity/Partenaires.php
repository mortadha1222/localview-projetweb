<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partenaires
 *
 * @ORM\Table(name="partenaires")
 * @ORM\Entity
 */
class Partenaires
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_partenaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPartenaire;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=1000, nullable=false)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=1000, nullable=false)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     */
    private $description;

    public function getIdPartenaire(): ?int
    {
        return $this->idPartenaire;
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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(string $site): self
    {
        $this->site = $site;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


}
