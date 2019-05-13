<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class Users implements UserInterface, \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

	/**
	 * @ORM\Column(type="string", length=255)
	 *
	 */
	private $username;


	/**
     * @ORM\Column(type="string", length=255)
     */
    private $surname;

    /**
     * @ORM\Column(type="integer", nullable=true, unique=true)
     */
    private $department;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $position;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $phone;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $salary;

    /**
     * @return mixed
     */
    public function getTotalWeeklyHourWorked()
    {
        return $this->totalWeeklyHourWorked;
    }

    /**
     * @param mixed $totalWeeklyHourWorked
     */
    public function setTotalWeeklyHourWorked($totalWeeklyHourWorked): void
    {
        $this->totalWeeklyHourWorked = $totalWeeklyHourWorked;
    }

    public function addTotalWeeklyHourWorked($totalWeeklyHourWorked): void
    {
        $this->totalWeeklyHourWorked += $totalWeeklyHourWorked;
    }


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Timesheet", mappedBy="user", cascade={"persist"})
     */
    private $timesheets;

    private $totalWeeklyHourWorked;

	private $weeklyTimesheet;

	/**
	 * @return mixed
	 */
	public function getWeeklyTimesheet() {
		return $this->weeklyTimesheet;
	}

	/**
	 * @param mixed $weeklyTimesheet
	 */
	public function setWeeklyTimesheet( $weeklyTimesheet ): void {
		$this->weeklyTimesheet = $weeklyTimesheet;
	}

    public function __construct()
    {
        $this->timesheets = new ArrayCollection();

        $this->totalWeeklyHourWorked = 0;
    }

	/**
	 * @return mixed
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * @param mixed $userName
	 */
	public function setUserName($userName)
	{
		$this->username = $userName;
	}
    /**
     * @return Collection|Timesheet[]
     */
    public function getTimesheets(): Collection
    {
        return $this->timesheets;
    }

    public function addTimesheet($timesheet): Collection
    {
         $this->timesheets[] = $timesheet;
    }

    public function removeTimesheet($timesheet): Collection
    {
        //$this->timesheets[] = $timesheet;

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getDepartment(): ?int
    {
        return $this->department;
    }

    public function setDepartment(int $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getSalary(): ?float
    {
        return $this->salary;
    }

    public function setSalary(?float $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }
}
