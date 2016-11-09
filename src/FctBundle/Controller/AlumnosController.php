<?php

namespace FctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FctBundle\Entity\Alumnos;
use FctBundle\Entity\Empresas;
use FctBundle\Form\AlumnosType;
use Symfony\Component\httpFoundation\Request;

class AlumnosController extends Controller
{
    public function showAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:Alumnos');
        $alumnos = $repository->findAll();
        $repo2 = $this->getDoctrine()->getRepository('FctBundle:Empresas');
        $empresas = $repo2->findAll();
        var_dump($empresas);
        return $this->render('FctBundle:Alumnos:alumnos.html.twig',array('alumnos'=>$alumnos,'empresas'=>$empresas));
    }

    public function nuevoAction(Request $request)
    {
        $empresa = new Empresas();
        $empresa->setNombre("Zarpa Gris");
        $alumno = new Alumnos();
        $form2= $this->createForm(AlumnosType::class,$alumno);

        $form2->handleRequest($request);
        if($form2->isSubmitted() && $form2->isValid()){
          //
          //
          $alumno=$form2->getData();
          //
          //
          $em=$this->getDoctrine()->getManager();
          $em->persist($alumno);
          $em->flush();

          return $this->redirectToRoute('exito_alumnos',array("status"=>"ok"));
      }

    	return $this->render('FctBundle:Alumnos:nuevo.html.twig',array("form"=>$form2->createView() ));
    }

    public function msgExitoAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:Alumnos');
        $alumnos = $repository->findAll();
        //alert("Empresa insertada con exito");
        return $this->render('FctBundle:Alumnos:alumnos.html.twig',array('alumnos'=>$alumnos));
    }
}
