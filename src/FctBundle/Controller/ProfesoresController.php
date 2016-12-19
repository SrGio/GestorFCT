<?php

namespace FctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FctBundle\Entity\Profesores;
use FctBundle\Form\ProfesoresType;
use Symfony\Component\httpFoundation\Request;

class ProfesoresController extends Controller
{
    //Función para mostrar todos los profesores
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:Profesores');
        $profesores = $repository->findAll();
        return $this->render('FctBundle:Profesores:profesores.html.twig',array('profesores'=>$profesores));
    }

    //Función para ir al formulario de profesores
    public function newAction(Request $request)
    {
        //Se crea un nuevo objeto Profesores
        $profesor = new Profesores();
        $form= $this->createForm(ProfesoresType::class,$profesor);

        $form->handleRequest($request);
        //Se comprueba que el envío de información sea valido
        if($form->isSubmitted() && $form->isValid()){
          $profesor=$form->getData();
          $em=$this->getDoctrine()->getManager();
          $em->persist($profesor);
          $em->flush();
          //Si se ha realizado con éxito
          return $this->redirectToRoute('exito_profesor',array("status"=>"ok"));
        }

        return $this->render('FctBundle:Profesores:nuevo.html.twig',array("form"=>$form->createView() ));
    }

    //Función que se ejecuta si se añade un profesor con éxito desde el formulario
    public function msgExitoAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:Profesores');
        $profesores = $repository->findAll();
        //alert("Empresa insertada con exito");
        //Se redirige a la lista de profesores para comprobar que está el nuevo
        return $this->render('FctBundle:Profesores:profesores.html.twig',array('profesores'=>$profesores));
    }

}
