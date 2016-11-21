<?php

namespace FctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FctBundle\Entity\Profesores;
use Symfony\Component\httpFoundation\Request;

class ProfesoresController extends Controller
{
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:Profesores');
        $profesores = $repository->findAll();
        return $this->render('FctBundle:Profesores:profesores.html.twig',array('profesores'=>$profesores));
    }
}
