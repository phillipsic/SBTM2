<?php

namespace Sbtmapp\SbtmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('SbtmappSbtmBundle:Default:index.html.twig');
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








        /*
          $qb->select('count(session.id)');
          $qb->from('SbtmappSbtmBundle:Session', 'session')
          ->where('status.name <> :status')
          ->
          ->leftJoin('SbtmappSbtmBundle:Status', 'status', 'session.status', 'status.id')
          ->setParameter('status', 'Todo');
          $totalSessionCount = $qb->getQuery()->getSingleScalarResult();
         */

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



        # Total number of Active projects Details for the drop down menu
         $em2 = $this->getDoctrine()->getManager();
        $qb = $em2->createQueryBuilder();
        $qb->select('p.id, p.project_name')
                ->from('SbtmappSbtmBundle:Project', 'p')
                ->where('p.project_completed = :completed')
                ->setParameter('completed', '0');
        $dropDownDetails = $qb->getQuery()->getResult();



        return $this->render('SbtmappSbtmBundle:Page:summary.html.twig', array(
                    'totalSessionCount' => $totalSessionCount,
                    'totalProjectCount' => $totalProjectCount,
                    'totalOpenProjectCount' => $totalActiveProjectCount,
                    'projectDetails' => $dropDownDetails
        ));
    }

    public function aboutAction() {
        return $this->render('SbtmappSbtmBundle:Page:about.html.twig');
    }

    public function sessionsAction() {




        return $this->render('SbtmappSbtmBundle:Page:sessions.html.twig');
    }

}
