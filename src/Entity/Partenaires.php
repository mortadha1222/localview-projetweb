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


}
