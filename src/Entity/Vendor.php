<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendor
 *
 * @ORM\Table(name="vendor", indexes={@ORM\Index(name="fk_iduser3", columns={"id_user"})})
 * @ORM\Entity
 */
class Vendor
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_vendor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVendor;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;


}
