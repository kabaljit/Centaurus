<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
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
        $user->setName('Centaurus');
        $user->setSurname('Team');
        $user->setUsername('test@test.com');
        $user->setEmail('test@test.com');
        $user->setPassword(
        	$this->encoder->encodePassword($user, 'Test123')
        ); // London123
        $user->setPhone('12345666543');
        $user->setSalary(100000000);
        $user->setPosition('Web developer');

        $manager->persist($user);

        $manager->flush();
    }
}
