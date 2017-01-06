<?php

namespace FctBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FctBundle\Form\UsersType;
use FctBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return new Response("Usuario registrado");
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

}
?>
