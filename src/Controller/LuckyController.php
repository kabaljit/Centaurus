<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number", name="app_luck_number")
     */
    public function number()
    {
        $number = random_int(0, 100);
         return $this->render('lucky/number.html.twig', [
             'number' => $number
         ]);

    }
//    /**
//     * @Route("/login", name="login_user")
//     */
//    public function showLogin(AuthenticationUtils $authenticationUtils){
//
//        // get the login error if there is one
//        $error = $authenticationUtils->getLastAuthenticationError();
//        // last username entered by the user
//        $lastUsername = $authenticationUtils->getLastUsername();
//
//        return $this->render('login/loginUser.html.twig', [
//            'last_username' => $lastUsername,
//            'error' => $error
//        ]);
//    }
}