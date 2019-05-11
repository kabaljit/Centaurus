<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Users;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use phpDocumentor\Reflection\Types\Boolean;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TimesheetRepository")
 */
class Timesheet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $hours_worked;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Users", inversedBy="timesheets")
     */
    private $user;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $template;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $status;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Worklog", mappedBy="timesheet", cascade={"persist", "remove"}, orphanRemoval=true)
	 */
	private $worklogs;

	public function __construct()
	{
		$this->worklogs = new ArrayCollection();
	}

	public function getId(): ?int
    {
        return $this->id;
    }
	/**
	 * @return Collection|Timesheet[]
	 */
	public function getWorklogs(): Collection
	{
		return $this->worklogs;
	}

	public function setWorklogs(Collection $worklogs)
	{
		$this->worklogs = $worklogs;
	}


	public function addWorklog( Worklog $worklog)
	{

		$worklog->setTimesheet($this);

		$this->worklogs[] = $worklog;

	}

	public function removeWorklog($worklog): bool
	{

		if ($this->worklogs->contains($worklog)) {

			$this->worklogs->removeElement($worklog);
			// not needed for persistence, just keeping both sides in sync
			return $worklog->removeTimesheet($this);

		}
		return false;
	}

    public function getHoursWorked(): ?float
    {
        return $this->hours_worked;
    }

    public function setHoursWorked(?float $hours_worked): self
    {
        $this->hours_worked = $hours_worked;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(Users $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(?string $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

}
