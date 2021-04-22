<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 *
 * @ORM\Table(name="planning", indexes={@ORM\Index(name="id_coach", columns={"id_coach"})})
 * @ORM\Entity
 */
class Planning
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_planning", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlanning;

    /**
     * @var string
     *
     * @ORM\Column(name="coach_name", type="string", length=32, nullable=false)
     */
    private $coachName;

    /**
     * @var string
     *
     * @ORM\Column(name="course", type="string", length=255, nullable=false)
     */
    private $course;

    /**
     * @var string
     *
     * @ORM\Column(name="startLesson", type="string", length=32, nullable=false)
     */
    private $startlesson;

    /**
     * @var string
     *
     * @ORM\Column(name="endLesson", type="string", length=32, nullable=false)
     */
    private $endlesson;

    /**
     * @var int
     *
     * @ORM\Column(name="maxNbr", type="integer", nullable=false)
     */
    private $maxnbr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbrActuel", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $nbractuel = NULL;

    /**
     * @var \Coach
     *
     * @ORM\ManyToOne(targetEntity="Coach")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_coach", referencedColumnName="id_coach")
     * })
     */
    private $idCoach;

    public function getIdPlanning(): ?int
    {
        return $this->idPlanning;
    }

    public function getCoachName(): ?string
    {
        return $this->coachName;
    }

    public function setCoachName(string $coachName): self
    {
        $this->coachName = $coachName;

        return $this;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(string $course): self
    {
        $this->course = $course;

        return $this;
    }

    public function getStartlesson(): ?string
    {
        return $this->startlesson;
    }

    public function setStartlesson(string $startlesson): self
    {
        $this->startlesson = $startlesson;

        return $this;
    }

    public function getEndlesson(): ?string
    {
        return $this->endlesson;
    }

    public function setEndlesson(string $endlesson): self
    {
        $this->endlesson = $endlesson;

        return $this;
    }

    public function getMaxnbr(): ?int
    {
        return $this->maxnbr;
    }

    public function setMaxnbr(int $maxnbr): self
    {
        $this->maxnbr = $maxnbr;

        return $this;
    }

    public function getNbractuel(): ?int
    {
        return $this->nbractuel;
    }

    public function setNbractuel(?int $nbractuel): self
    {
        $this->nbractuel = $nbractuel;

        return $this;
    }

    public function getIdCoach(): ?Coach
    {
        return $this->idCoach;
    }

    public function setIdCoach(?Coach $idCoach): self
    {
        $this->idCoach = $idCoach;

        return $this;
    }


}
