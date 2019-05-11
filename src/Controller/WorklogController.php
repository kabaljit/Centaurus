<?php

namespace App\Controller;

use App\Entity\Timesheet;
use App\Entity\Worklog;
use App\Form\Type\WorklogFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class WorklogController extends AbstractController
{
    /**
     * @Route("/worklog", name="worklog")
     */
    public function index()
    {
        return $this->render('worklog/index.html.twig', [
            'controller_name' => 'WorklogController',
        ]);
    }

    /**
     * Auto add to database
     * Because of One-to-many relationship
     * @see Timesheet and Worklogs classes
     */
    public function addWorklog($timesheetId, Request $request){

    }

    /**
     * @Route("/editWorklog/{id}", name="editworklog")
     */
    public function editWorklog($id, Request $request){
        $em = $this->getDoctrine()->getManager();


        $worklog = $em->getRepository(Worklog::class)->find($id);

        if (!empty($worklog)) {
            $form = $this->createForm(WorklogFormType::class, $worklog);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em->persist($worklog);

                $em->flush();

                $response = $this->forward('App\Controller\TimesheetController::listTimeSheet');
                return $response;
            }
            return $this->render('worklog/editWorklog.html.twig', [
                'form' => $form->createView(),
            ]);
        }else{
            print_r('Worklog not found');
            die();
            }
    }

    /**
     * Auto delete
     * When a worklog doesn't belong to any timesheet
     * @see Timesheet and Worklogs classes
     */
    public function deleteWorklog(){

    }


}
