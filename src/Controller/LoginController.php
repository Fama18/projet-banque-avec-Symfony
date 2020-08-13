<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('accueil.html.twig');
    }
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->redirectToRoute('index');
    }
    /**
     * @Route("/clientPhysique", name="clientPhysique")
     */
    public function clientPhysique()
    {
        return $this->render('clientPhysique.html.twig');
    }
    /**
     * @Route("/clientMoral", name="clientMoral")
     */
    public function clientMoral()
    {
        return $this->render('clientMoral.html.twig');
    }
    /**
     * @Route("/accueil", name="accueil")
     */
    public function client()
    {
        return $this->render('accueil.html.twig');
    }
    /**
     * @Route("/compte", name="compte")
     */
    public function compte()
    {
        return $this->render('compte.html.twig');
    }
}
