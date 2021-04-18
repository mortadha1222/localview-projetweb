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


}
