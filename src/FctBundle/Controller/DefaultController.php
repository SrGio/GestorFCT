<?php

namespace FctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FctBundle:Default:index.html.twig');
    }

    public function empresasAction()
    {
    	return $this->render('FctBundle:empresas:empresas.html.twig');
    }
}
