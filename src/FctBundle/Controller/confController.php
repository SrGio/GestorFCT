<?php

namespace FctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FctBundle\Entity\conf;
use FctBundle\Form\confType;
use Symfony\Component\httpFoundation\Request;

class confController extends Controller
{
    public function confAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:conf');
        $config = $repository->findAll();
        return $this->render('FctBundle:conf:config.html.twig',array('config'=>$config));
    }

    public function addConfAction(Request $request)
    {
        $config = new conf();
        $form= $this->createForm(confType::class,$config);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
          //
          //
          $config=$form->getData();
          //
          //
          $em=$this->getDoctrine()->getManager();
          $em->persist($config);
          $em->flush();

          return $this->redirectToRoute('exito_configuracion',array("status"=>"ok"));
      }

    	return $this->render('FctBundle:conf:addConf.html.twig',array("form"=>$form->createView() ));
    }

    public function msgExitoAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:conf');
        $config = $repository->findAll();
        return $this->render('FctBundle:conf:config.html.twig',array('config'=>$config));
    }
}
