<?php

namespace FctBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FctBundle\Form\UsersType;
use FctBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class UsersController extends Controller
{
    /**
     * @Route("/usuarios/registro", name="user_registration")
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            $roles = ["ROLE_USER"];
            $user->setRoles($roles);
            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            return $this->render('FctBundle:Users:bienvenido.html.twig',array("form"=>$form->createView() ));
            //return new Response("Usuario registrado");
            //return $this->render('FctBundle:Users:login.html.twig',array('form' => $form->createView()));
        }

        return $this->render('FctBundle:Users:registro.html.twig',array('form' => $form->createView())
        );
    }
    /**
     * @Route("/usuarios", name="usuarios")
     */
    public function usuariosAction(Request $request)
    {
      return $this->render('FctBundle:Users:usuarios.html.twig');
    }

    /**
     * @Route("/usuarios/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('FctBundle:Users:login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    /**
     * @Route("/admin/config", name="admin")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function adminAction(){

        $repository = $this->getDoctrine()->getRepository('FctBundle:Users');
        $usuarios = $repository->findAll();
        //var_dump($usuarios);
        return $this->render('FctBundle:Users:admin.html.twig',array('usuarios'=>$usuarios));
    }


    /**
     * @Route("/admin/user", name="user")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function userAction($id){

        $repository = $this->getDoctrine()->getRepository('FctBundle:Users');
        $usuarios = $repository->findAll();
        //var_dump($usuarios);
        return $this->render('FctBundle:Users:user.html.twig',array('usuarios'=>$usuarios,'id'=>$id));
    }

    /**
     * @Route("/admin/user", name="user")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function addAction($id){

        $repository = $this->getDoctrine()->getRepository('FctBundle:Users');
        $usuarios = $repository->findOneById($id);
        $roles = ["ROLE_USER","ROLE_ADMIN"];
        $usuarios->setRoles($roles);

        $em = $this->getDoctrine()->getManager();
        $em->persist($usuarios);
        $em->flush();

        return $this->render('FctBundle:Users:user.html.twig',array('usuarios'=>$usuarios,'id'=>$id));
    }

    /**
     * @Route("/admin/user", name="user")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function removeAction($id){

        $repository = $this->getDoctrine()->getRepository('FctBundle:Users');
        $usuarios = $repository->findOneById($id);
        $roles = ["ROLE_USER"];
        $usuarios->setRoles($roles);

        $em = $this->getDoctrine()->getManager();
        $em->persist($usuarios);
        $em->flush();

        return $this->render('FctBundle:Users:user.html.twig',array('usuarios'=>$usuarios,'id'=>$id));
    }

}
?>
