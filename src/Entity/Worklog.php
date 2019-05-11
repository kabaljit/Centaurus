<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WorklogRepository")
 */
class Worklog
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $issue;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $start;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $end;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $duration;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Timesheet", inversedBy="worklogs")
     */
    private $timesheet;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIssue(): ?string
    {
        return $this->issue;
    }

    public function setIssue(string $issue): self
    {
        $this->issue = $issue;

        return $this;
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(string $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?string
    {
        return $this->end;
    }

    public function setEnd(string $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getTimesheet(): ?Timesheet
    {
        return $this->timesheet;
    }

    public function setTimesheet(Timesheet $timesheet): self
    {
        $this->timesheet = $timesheet;

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
    public function removeTimesheet( Timesheet $timesheet){
    	if($this->timesheet->getId() == $timesheet->getId()){

		    $this->timesheet = null;
		    return true;
	    }
    	return false;
    }
}
