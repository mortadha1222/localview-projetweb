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


}
