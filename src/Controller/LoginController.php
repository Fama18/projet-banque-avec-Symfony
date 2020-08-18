<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ClientPhysique;
use App\Entity\ClientMoral;
use App\Entity\TypeCompte;

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
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        return $this->render('accueil.html.twig');
    }
    /**
     * @Route("/compte", name="compte")
     */
    public function compte()
    {
        $em = $this->getDoctrine()->getManager();
        $data['clientp'] = $em->getRepository(ClientPhysique::class)->findAll();
        $data['clientm'] = $em->getRepository(ClientMoral::class)->findAll();
        $data['typec'] = $em->getRepository(TypeCompte::class)->findAll();
        return $this->render('compte.html.twig', $data);
    }
}
