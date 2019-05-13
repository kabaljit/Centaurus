<?php

namespace App\Controller;

use App\Entity\Timesheet;
use App\Entity\Users;
use App\Entity\Worklog;
use App\Form\Type\TimesheetFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Controller\EntityManagerInterface;
use Symfony\Component\Validator\Constraints\Time;

class TimesheetController extends AbstractController
{

    /**
     * @Route("/timesheet", name="timesheet")
     */
    public function listTimeSheet( Request $request){
        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $em = $this->getDoctrine()->getManager();
            $currentUser = $this->get('security.token_storage')->getToken()->getUser();

            $userId = $currentUser->getId();

            $timesheet = $em->getRepository('App\Entity\Timesheet')
                ->findOneByUserAndDate($userId, date('Y-m-d'));

            $worklogs = array();

            if (empty($timesheet)){
                $timesheet = new Timesheet();
                $timesheet->setDate(new \DateTime());
                $timesheet->setUser($currentUser);
                $timesheet->setStatus('draft');
                $timesheet->setHoursWorked(0);
            }else{
                $worklogs = $timesheet->getWorklogs();
            }

            $form = $this->createForm(TimesheetFormType::class, $timesheet);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $timesheet->setStatus('submitted');

                $newWorklogs = $timesheet->getWorklogs();
                $hours_worked = 0;
                foreach ($newWorklogs as $worklog){
                    $hours_worked += (int)($worklog->getDuration());
                }

                $timesheet->setHoursWorked($hours_worked);

                $em->persist($timesheet);

                $em->flush();
            }

            return $this->render('timesheet/timesheet.html.twig', [
                'saveWorklogs' => $worklogs,
                'form' => $form->createView(),
                'timesheet' => $timesheet,
            ]);
        }

    }

    /**
     * @Route("/timesheet/{timesheetid}/removeworklog/{worklogid}", name="remove_timesheet_worklog")
     */
    public function removeWorklog($timesheetid, $worklogid)
    {

        $em = $this->getDoctrine()->getManager();


        $timesheet = $em->getRepository(Timesheet::class)->find($timesheetid);
        ;
        if(!$timesheet instanceof Timesheet){
            $message="Timesheet is not valid";
            print_r($message);
            die();
        }

        $worklog = $em->getRepository(Worklog::class)->find($worklogid);


        if(!$worklog instanceof Worklog){
            $message="worklog is not valid";
            print_r($message);
            die();
        }

        $worklogs = $timesheet->getWorklogs()->getValues();

        if(in_array($worklog, $worklogs)){
            $timesheet->removeWorklog($worklog);
            $data = [
                'success' => true,
                'has_worklog' => in_array($worklog, $timesheet->getWorklogs()->getValues()),
                'e' => $timesheet->getWorklogs()->getValues(),
                'removeWorklog' => $worklog->getId()
            ];

        }else{
            $message="Error timesheet don't have this worklog";
            print_r($message);
            die();
        }

        $em->persist($timesheet);

        $em->flush();

//			$this->sendResponseStatus('OK');
        return new JsonResponse($data);
    }

    /**
     * @Route("/timesheet/date/{date}", name="timesheetBydate")
     * Select by date
     */
    public function listTimesheetByDate($date ,Request $request){
        $securityContext = $this->container->get('security.authorization_checker');

        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $em = $this->getDoctrine()->getManager();
            $currentUser = $this->get('security.token_storage')->getToken()->getUser();
            $userId = $currentUser->getId();

            $timesheet = $em->getRepository('App\Entity\Timesheet')
                ->findOneByUserAndDate($userId, date('Y-m-d', strtotime($date)));

            if (empty($timesheet)){
                $timesheet = new Timesheet();
                $timesheet->setDate(new \DateTime(($date)));
                $timesheet->setUser($currentUser);
                $timesheet->setStatus('draft');
                $timesheet->setHoursWorked(0);
            }
            $worklogs = $timesheet->getWorklogs();

            $form = $this->createForm(TimesheetFormType::class, $timesheet);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $timesheet->setStatus('submitted');

                $newWorklogs = $timesheet->getWorklogs();
                $hours_worked = 0;
                foreach ($newWorklogs as $worklog){
                    $hours_worked += (int)($worklog->getDuration());
                }

                $timesheet->setHoursWorked($hours_worked);

                $em->persist($timesheet);

                $em->flush();
            }

            return $this->render('timesheet/timesheet.html.twig', [
                'saveWorklogs' => $worklogs,
                'form' => $form->createView(),
                'timesheet' => $timesheet
            ]);
        }

    }

    /**
     * @Route ("/timesheet/approve/", name="approveTimesheet")
     */
    public function timesheetApprove (Request $request){

        $em = $this->getDoctrine()->getManager();
        $weekDate = '2019-05-14';

        $users = $em->getRepository(Users::class)->findAll();

        if(!empty($users)) {
	        foreach ( $users as $user ) {
		        $timesheets = $em->getRepository( Timesheet::class )
		                         ->findOneByUserAndDates( $user->getId(), $weekDate );
//				print_r($timesheets);
		        if(!empty($timesheets)) {

			        foreach ( $timesheets as $timesheet ) {
				        $user->addTotalWeeklyHourWorked( $timesheet->getHoursWorked() );
				        $user->setWeeklyTimesheet($timesheet->getStatus());
			        }
		        }

		        print_r($user->getTotalWeeklyHourWorked());
	        }
        }

//        $users = null;
        return $this->render('timesheet/approve.html.twig',[
            'users'=> $users,
	        'date' => $weekDate
	            ]);
    }

	/**
	 * @Route("/user/{userID}/approveWeekly/{weekDate}/{status}", name="approve_user_whole_week_timesheet")
	 */
	public function approveWeeklyTimesheet($userID, $weekDate, $status)
	{

		$em = $this->getDoctrine()->getManager();


		$timesheet = $em->getRepository(Users::class)->find($userID);

		if(!$timesheet instanceof Users){
			$message="User is not valid";
			print_r($message);
			die();
		}

		$timesheets = $em->getRepository(Timesheet::class)->findOneByUserAndDates($userID, $weekDate);


		if(empty($timesheets)){
			$message="Timesheet is not valid";
			print_r($message);
			die();
		}

		foreach ($timesheets as $timesheet){
			$timesheet->setStatus($status);
		}

		$data = [
			'success' => true
		];

		$em->persist($timesheet);

		$em->flush();

//			$this->sendResponseStatus('OK');
		return new JsonResponse($data);
	}
}

