<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProfilController extends Controller
{
    /**
     * @Route("/profil", name="user_profil")
     */
    public function registerAction(Request $request)
    {
        return $this->render('profil/index.html.twig');
    }
}