<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\SuggestionRepository;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Suggestion
 *
 * @ORM\Table(name="suggestion", indexes={@ORM\Index(name="user_suggestion", columns={"id_user"})})
 * @ORM\Entity(repositoryClass=SuggestionRepository::class)
 * @ORM\HasLifecycleCallbacks
 */
class Suggestion
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
     * @Assert\NotBlank(message="a Suggestion should have a Title")
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
     * @Assert\NotBlank(message="a Suggestion should have a Description")
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

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }


}
