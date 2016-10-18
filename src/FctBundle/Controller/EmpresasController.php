<?php

namespace FctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmpresasController extends Controller
{
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:Empresas');
        $empresas = $repository->findAll();
        return $this->render('FctBundle:Empresas:empresas.html.twig',array('empresas'=>$empresas));
    }

}
