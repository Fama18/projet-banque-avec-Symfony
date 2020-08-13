<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Compte;

class CompteController extends AbstractController
{
    /**
     * @Route("/addCompte", name="addCompte")
     */
    public function addCompte()
    {
        extract($_POST);

            if(isset($btn)) {
                $em = $this->getDoctrine()->getManager();
                $Compte = new Compte();

                $Compte->setNumeroagence($numeroagence);
                $Compte->setNumerocompte($numerocompte);
                $Compte->setClerib($clerib);
                $Compte->setClientPhysique($clientPhysique);

                $em->persist($Compte);
                $em->flush();

                return $this->render('compte.html.twig');
            }
    }

}
