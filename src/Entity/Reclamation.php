<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReclamationRepository;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="user_reclamation", columns={"id_user"})})
 * @ORM\Entity(repositoryClass=ReclamationRepository::class)
 * @ORM\HasLifecycleCallbacks
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="a Reclamation should have a Title")
     * @Assert\Length(
     *      min = 8,
     *      max = 255,
     *      minMessage = "must contain {{ limit }} character ",
     *      maxMessage = "must contain {{ limit }} character at most"
     * )
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="a Reclamation should have a Description")
     * @Assert\Length(
     *      min = 8,
     *      max = 255,
     *      minMessage = "must contain {{ limit }} character ",
     *      maxMessage = "must contain {{ limit }} character at most"
     * )
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="answer", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $answer = '';

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser=1;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date ;

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function prePersist()
    {

            $this->date = new \DateTime();

    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="archive", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $archive ;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(?string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date ;

        return $this;
    }

    public function getArchive(): ?string
    {
        return $this->archive;
    }

    public function setArchive(?string $archive): self
    {
        $this->archive = $archive;

        return $this;
    }


}
