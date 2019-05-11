<?php

namespace App\Repository;

use App\Entity\Timesheet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Timesheet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Timesheet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Timesheet[]    findAll()
 * @method Timesheet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TimesheetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Timesheet::class);
    }

    // /**
    //  * @return Task[] Returns an array of Task objects
    //  */

    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Task
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findOneByUserAndDate($user, $date): ? Timesheet
    {
    	$r = $this->createQueryBuilder('t')
	              ->andWhere('t.user = :user')
	              ->setParameter('user', $user)
	              ->andWhere('t.date = :date')
	              ->setParameter('date', $date)
	              ->getQuery();

//    	print_r($r);


    	return $this->createQueryBuilder('t')
		    ->andWhere('t.user = :user')
		    ->setParameter('user', $user)
		    ->andWhere('t.date = :date')
		    ->setParameter('date', $date)
		    ->getQuery()
		    ->getOneOrNullResult();

    }
}
