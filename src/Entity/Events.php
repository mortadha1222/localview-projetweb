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


}
