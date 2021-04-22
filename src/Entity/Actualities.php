<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualities
 *
 * @ORM\Table(name="actualities")
 * @ORM\Entity
 */
class Actualities
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_act", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAct;

    /**
     * @var string
     *
     * @ORM\Column(name="title_act", type="string", length=100, nullable=false)
     */
    private $titleAct;

    /**
     * @var string
     *
     * @ORM\Column(name="date_act", type="string", length=100, nullable=false)
     */
    private $dateAct;

    /**
     * @var string
     *
     * @ORM\Column(name="description_act", type="string", length=100, nullable=false)
     */
    private $descriptionAct;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_act", type="string", length=100, nullable=false)
     */
    private $photoAct;

    /**
     * @var int
     *
     * @ORM\Column(name="id_member", type="integer", nullable=false)
     */
    private $idMember;

    public function getIdAct(): ?int
    {
        return $this->idAct;
    }

    public function getTitleAct(): ?string
    {
        return $this->titleAct;
    }

    public function setTitleAct(string $titleAct): self
    {
        $this->titleAct = $titleAct;

        return $this;
    }

    public function getDateAct(): ?string
    {
        return $this->dateAct;
    }

    public function setDateAct(string $dateAct): self
    {
        $this->dateAct = $dateAct;

        return $this;
    }

    public function getDescriptionAct(): ?string
    {
        return $this->descriptionAct;
    }

    public function setDescriptionAct(string $descriptionAct): self
    {
        $this->descriptionAct = $descriptionAct;

        return $this;
    }

    public function getPhotoAct(): ?string
    {
        return $this->photoAct;
    }

    public function setPhotoAct(string $photoAct): self
    {
        $this->photoAct = $photoAct;

        return $this;
    }

    public function getIdMember(): ?int
    {
        return $this->idMember;
    }

    public function setIdMember(int $idMember): self
    {
        $this->idMember = $idMember;

        return $this;
    }


}
