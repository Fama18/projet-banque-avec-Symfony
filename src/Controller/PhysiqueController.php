<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ClientPhysique;

class PhysiqueController extends AbstractController
{
    /**
     * @Route("/addPhysique", name="addPhysique")
     */
    public function addPhysique()
    {
        extract($_POST);

            if(isset($btn2)) {
                $em = $this->getDoctrine()->getManager();
                $ClientPhysique = new ClientPhysique();

                $ClientPhysique->setNumCni($numCni);
                $ClientPhysique->setNom($nom);
                $ClientPhysique->setPrenom($prenom);
                $ClientPhysique->setCivilite($civilite);
                $ClientPhysique->setDatenaissance($datenaissance);
                $ClientPhysique->setAdresse($adresse);
                $ClientPhysique->setEmail($email);
                $ClientPhysique->setTelephone($telephone);

                $em->persist($ClientPhysique);
                $em->flush();

                return $this->render('clientPhysique.html.twig');
            }
    }

}
