<?php

namespace App\DataFixtures;

use App\Entity\Users;
use App\Entity\Timesheet;
use App\Entity\Worklog;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
	private $encoder;
	public function __construct(UserPasswordEncoderInterface $encoder) {
		$this->encoder = $encoder;
	}

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
	    $user = new Users();
	    $user->setName('Kabaljit');
	    $user->setSurname('Singh');
	    $user->setUsername('kabaljit10@gmail.com6');
	    $user->setEmail('kabaljit10@gmail.com6');
	    $user->setPassword(
		    $this->encoder->encodePassword($user, 'London123')
	    ); // London123
	    $user->setPhone('12345666543');
	    $user->setSalary(100000000);
	    $user->setPosition('Web developer');


	    $timesheet = new Timesheet();
	    $timesheet->setDate( new \DateTime() );
	    $timesheet->setHoursWorked(1);
	    $timesheet->setStatus('submitted');
	    $timesheet->setTemplate('Did');
	    $timesheet->setUser($user);

	    $worklog = new Worklog();
	    $worklog->setIssue('FM12-2');
	    $worklog->setDescription('Test the database');
	    $worklog->setDuration(1);
	    $worklog->setStart('12:00');
	    $worklog->setEnd('13:00');
	    $worklog->setTimesheet($timesheet);
	    $worklog->setIssue('FDM-1235');

	    $manager->persist($user);
	    $manager->persist($timesheet);
		$manager->persist($worklog);

	    $manager->flush();
    }
}
