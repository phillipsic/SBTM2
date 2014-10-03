<?php

namespace Sbtmapp\SbtmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('SbtmappSbtmBundle:Default:index.html.twig');
    }

    public function summaryAction() {
        return $this->render('SbtmappSbtmBundle:Page:index.html.twig');
    }

}
