<?php

namespace FctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FctBundle\Entity\Alumnos;
use FctBundle\Entity\Empresas;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends Controller{
  private function serializeEmpresa(Empresas $empresa)
    {
      return array(
          'nombre' => $empresa->getNombre(),
          'direccion' => $empresa->getDireccion(),
          'cp' => $empresa->getCp(),
          'telefono 1' => $empresa->getTelefono1(),
          'telefono 2' => $empresa->getTelefono2(),
          'fecha' => $empresa->getFechaCreacion(),
      );
    }
    public function empresaAction()
    {
        $repository = $this->getDoctrine()->getRepository('FctBundle:Empresas');
        $empresas = $repository->findAll();
        //var_dump($empresas);
        $data = array('empresas' => array());
        foreach ($empresas as $empresa) {
            $data['empresas'][] = $this->serializeEmpresa($empresa);
        }
        $response = new JsonResponse($data, 400);
        return $response;
        //return $this->json($empresas);
    }

    private function serializeProfesor(Profesores $profesor)
      {
        return array(
            'nombre' => $profesor->getNombre(),
            'apellidos' => $profesor->getApellidos(),
            'departamento' => $profesor->getDepartamento(),
        );
      }
      public function profesorAction()
      {
          $repository = $this->getDoctrine()->getRepository('FctBundle:Profesores');
          $profesores = $repository->findAll();

          $data = array('profesores' => array());
          foreach ($profesores as $profesor) {
              $data['profesores'][] = $this->serializeProfesor($profesor);
          }
          $response = new JsonResponse($data, 400);
          return $response;
          //return $this->json($profesores);
      }



    private function deserializeEmpresa()
      {

      }
    /*public function empresaInsertAction(Request $request){

      $empresa = new Empresas();
      $response=array(
          $empresa->setNombre($request->request->get('nombre', 'default nombre')),
          $empresa->setDireccion($request->request->get('direccion')),
          $empresa->setCp($request->request->get('cp')),
          $empresa->setTelefono1($request->request->get('telefono1')),
          $empresa->setTelefono2($request->request->get('telefono2')),
          $empresa->setFechaCreacion($request->request->get('fecha')),
      );




          $em=$this->getDoctrine()->getManager();
          echo "Gatos";
          $em->persist($empresa);
          $em->flush();

          return $this->redirectToRoute('exito_empresas',array("status"=>"ok"));


      return $this->render('exito_empresas',array("status"=>"K.O."));
    }*/
}

?>
