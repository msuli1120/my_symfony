<?php

	namespace AppBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Component\BrowserKit\Request;
	use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

	class LoginController extends Controller
	{
		/**
		 * @Route("/login", name="login")
		 */
		public function loginAction(AuthenticationUtils $authentication_utils)
		{
			$errors = $authentication_utils->getLastAuthenticationError();

			$lastUsername = $authentication_utils->getLastUsername();

			return $this->render('AppBundle:Login:login.html.twig', array(
				'errors' => $errors,
				'username' => $lastUsername
			));
		}

	}
