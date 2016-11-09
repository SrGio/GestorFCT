<?php

namespace FctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FctBundle\Entity\Empresas;
use FctBundle\Form\EmpresasType;
use Symfony\Component\httpFoundation\Request;

class EmpresasController extends Controller
{
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:Empresas');
        $empresas = $repository->findAll();
        return $this->render('FctBundle:Empresas:empresas.html.twig',array('empresas'=>$empresas));
    }

    public function nuevaAction(Request $request)
    {
        $empresa = new Empresas();
        $form= $this->createForm(EmpresasType::class,$empresa);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
          //
          //
          $empresa=$form->getData();
          //
          //
          $em=$this->getDoctrine()->getManager();
          $em->persist($empresa);
          $em->flush();

          return $this->redirectToRoute('exito_empresas',array("status"=>"ok"));
        }

        return $this->render('FctBundle:Empresas:nueva.html.twig',array("form"=>$form->createView() ));
    }

    public function msgExitoAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:Empresas');
        $empresas = $repository->findAll();
        //alert("Empresa insertada con exito");
        return $this->render('FctBundle:Empresas:empresas.html.twig',array('empresas'=>$empresas));
    }



}
