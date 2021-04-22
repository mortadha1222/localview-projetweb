<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events", indexes={@ORM\Index(name="fk_idmembre5", columns={"id_member"})})
 * @ORM\Entity
 */
class Events
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="name_eve", type="string", length=100, nullable=false)
     */
    private $nameEve;

    /**
     * @var string
     *
     * @ORM\Column(name="date_eve", type="string", length=50, nullable=false)
     */
    private $dateEve;

    /**
     * @var string
     *
     * @ORM\Column(name="description_eve", type="string", length=255, nullable=false)
     */
    private $descriptionEve;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_eve", type="string", length=100, nullable=false)
     */
    private $photoEve;

    /**
     * @var \Member
     *
     * @ORM\ManyToOne(targetEntity="Member")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_member", referencedColumnName="id_member")
     * })
     */
    private $idMember;

    public function getIdEvent(): ?int
    {
        return $this->idEvent;
    }

    public function getNameEve(): ?string
    {
        return $this->nameEve;
    }

    public function setNameEve(string $nameEve): self
    {
        $this->nameEve = $nameEve;

        return $this;
    }

    public function getDateEve(): ?string
    {
        return $this->dateEve;
    }

    public function setDateEve(string $dateEve): self
    {
        $this->dateEve = $dateEve;

        return $this;
    }

    public function getDescriptionEve(): ?string
    {
        return $this->descriptionEve;
    }

    public function setDescriptionEve(string $descriptionEve): self
    {
        $this->descriptionEve = $descriptionEve;

        return $this;
    }

    public function getPhotoEve(): ?string
    {
        return $this->photoEve;
    }

    public function setPhotoEve(string $photoEve): self
    {
        $this->photoEve = $photoEve;

        return $this;
    }

    public function getIdMember(): ?Member
    {
        return $this->idMember;
    }

    public function setIdMember(?Member $idMember): self
    {
        $this->idMember = $idMember;

        return $this;
    }


}
