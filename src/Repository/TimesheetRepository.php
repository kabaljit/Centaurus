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

    public function findOneByUserAndDates($user, $date){

        $dates_array = array();

        if(date('N', strtotime($date)) == 8){

            $dates_array['monday'] = date("Y-m-d", strtotime('Monday last week', strtotime($date)));
            $dates_array['sunday'] =  date("Y-m-d", strtotime('Sunday last week', strtotime($date)));

        }else{

            $dates_array['monday'] = date("Y-m-d", strtotime('Monday this week', strtotime($date)));
            $dates_array['sunday'] =  date("Y-m-d", strtotime('Sunday this week', strtotime($date)));

        }

//        print_r($dates_array);

        return $this->createQueryBuilder('t')
            ->andWhere('t.user = :user')
            ->setParameter('user', $user)
            ->andWhere('t.date >= :startWeekDate')
            ->setParameter('startWeekDate',  $dates_array['monday'])
            ->andWhere('t.date <= :endWeekDate')
            ->setParameter('endWeekDate',  $dates_array['sunday'])
            ->getQuery()
	        ->getResult();
    }
}
