<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservations
 *
 * @ORM\Table(name="reservations", indexes={@ORM\Index(name="id_member", columns={"id_member"}), @ORM\Index(name="id_coach", columns={"id_coach"}), @ORM\Index(name="id_planning", columns={"id_planning"})})
 * @ORM\Entity
 */
class Reservations
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_coach", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idCoach = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=64, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_reservation", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateReservation = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="etat", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $etat = 'NULL';

    /**
     * @var \Member
     *
     * @ORM\ManyToOne(targetEntity="Member")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_member", referencedColumnName="id_member")
     * })
     */
    private $idMember;

    /**
     * @var \Planning
     *
     * @ORM\ManyToOne(targetEntity="Planning")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_planning", referencedColumnName="id_planning")
     * })
     */
    private $idPlanning;

    public function getIdReservation(): ?int
    {
        return $this->idReservation;
    }

    public function getIdCoach(): ?int
    {
        return $this->idCoach;
    }

    public function setIdCoach(?int $idCoach): self
    {
        $this->idCoach = $idCoach;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(?\DateTimeInterface $dateReservation): self
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

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

    public function getIdPlanning(): ?Planning
    {
        return $this->idPlanning;
    }

    public function setIdPlanning(?Planning $idPlanning): self
    {
        $this->idPlanning = $idPlanning;

        return $this;
    }


}
