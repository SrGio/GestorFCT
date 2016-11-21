<?php

namespace FctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FctBundle\Entity\Profesores;
use FctBundle\Form\ProfesoresType;
use Symfony\Component\httpFoundation\Request;

class ProfesoresController extends Controller
{
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:Profesores');
        $profesores = $repository->findAll();
        return $this->render('FctBundle:Profesores:profesores.html.twig',array('profesores'=>$profesores));
    }

    public function newAction(Request $request)
    {
        $profesor = new Profesores();
        $form= $this->createForm(ProfesoresType::class,$profesor);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
          //
          //
          $profesor=$form->getData();
          //
          //
          $em=$this->getDoctrine()->getManager();
          $em->persist($profesor);
          $em->flush();

          return $this->redirectToRoute('exito_profesor',array("status"=>"ok"));
        }

        return $this->render('FctBundle:Profesores:nuevo.html.twig',array("form"=>$form->createView() ));
    }

    public function msgExitoAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:Profesores');
        $profesores = $repository->findAll();
        //alert("Empresa insertada con exito");
        return $this->render('FctBundle:Profesores:profesores.html.twig',array('profesores'=>$profesores));
    }

}
