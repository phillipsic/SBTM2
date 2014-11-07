<?php

namespace Sbtmapp\SbtmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session;
use Sbtmapp\SbtmBundle\Entity\Project;
use Sbtmapp\SbtmBundle\Form\Type\ChooseProjectType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('SbtmappSbtmBundle:Default:index.html.twig');
    }

    public function selectProjectAction(Request $request) {

        $session = $this->get("session");
        $session->set("loggedUser", "Ian");



        # Total number of Active projects Details for the drop down menu
        $em2 = $this->getDoctrine()->getManager();
        $qb = $em2->createQueryBuilder();
        $qb->select('p.id, p.project_name')
                ->from('SbtmappSbtmBundle:Project', 'p')
                ->where('p.project_completed = :completed')
                ->setParameter('completed', '0');
        $dropDownDetails = $qb->getQuery()->getResult();


        # Set up the form for the dropdown selection
        $project = new ChooseProjectType();
        $form = $this->createForm($project, $dropDownDetails);



        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
            $session->set("selectProject", "Ian");
            return $this->redirect($this->generateUrl('summary'));
        }


        return $this->render('SbtmappSbtmBundle:Page:changeproject.html.twig', array(
                    'loggedUser' => $this->getUser()->getUsername(),
                    'selectedProject' => $session->get("selectProject"),
                    'form' => $form->createView()
        ));
    }

    public function summaryAction() {



        $em = $this->getDoctrine()->getManager();

        # Total number of sessions in database
        $qb = $em->createQueryBuilder();
        $qb->select('count(session.id)');
        $qb->from('SbtmappSbtmBundle:Session', 'session');
        $totalSessionCount = $qb->getQuery()->getSingleScalarResult();

        # Total number of not completed sessions in database


        $qb = $em->createQuery(
                        'SELECT s '
                        . 'FROM Sbtmapp\SbtmBundle\Entity\Session s '
                        . ' LEFT JOIN Sbtmapp\SbtmBundle\Entity\Status st '
                        . 'WITH st.id = s.status_id '
                        . 'WHERE st.name = :status ')
                ->setParameter('status', 'Todo');
        $totalActiveSessionCount = $qb->getResult();



        # Total number of projects
        $qb = $em->createQueryBuilder();
        $qb->select('count(project.id)');
        $qb->from('SbtmappSbtmBundle:Project', 'project');
        $totalProjectCount = $qb->getQuery()->getSingleScalarResult();

        # Total number of Active projects
        $qb = $em->createQueryBuilder();
        $qb->select('count(project.id)')
                ->from('SbtmappSbtmBundle:Project', 'project')
                ->where('project.project_completed = :completed')
                ->setParameter('completed', '0');
        $totalActiveProjectCount = $qb->getQuery()->getSingleScalarResult();





        $session = $this->get("session");


        $session->get("loggedUser");

        return $this->render('SbtmappSbtmBundle:Page:summary.html.twig', array(
                    'totalSessionCount' => $totalSessionCount,
                    'totalProjectCount' => $totalProjectCount,
                    'totalOpenProjectCount' => $totalActiveProjectCount,
                    'loggedUser' => $this->getUser()->getUsername()
        ));
    }

    public function aboutAction() {
        return $this->render('SbtmappSbtmBundle:Page:about.html.twig');
    }

    public function sessionsAction() {
        return $this->render('SbtmappSbtmBundle:Page:sessions.html.twig');
    }

}
