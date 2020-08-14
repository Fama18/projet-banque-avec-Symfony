<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Compte;
use App\Entity\ClientPhysique;
use App\Entity\ClientMoral;
use App\Entity\TypeCompte;

class CompteController extends AbstractController
{
    /**
     * @Route("/addCompte", name="addCompte")
     */
    public function addCompte()
    {
        extract($_POST);
        /* var_dump($_POST);
        die(); */

            if(isset($btn)) {
                $em = $this->getDoctrine()->getManager();
                $data['clientp'] = $em->getRepository(ClientPhysique::class)->findAll();
                $data['clientm'] = $em->getRepository(ClientMoral::class)->findAll();
                $data['typec'] = $em->getRepository(TypeCompte::class)->findAll();
                /* var_dump($data);
                die(); */
                $Compte = new Compte();

                $Compte->setNumeroagence($numeroagence);
                $Compte->setNumerocompte($numerocompte);
                $Compte->setClerib($clerib);
                $cp = $em->getRepository(ClientPhysique::class)->find($clientphysique);
                $Compte->setClientphysique($cp);
                $cm = $em->getRepository(ClientMoral::class)->find($clientmoral);
                $Compte->setClientmoral($cm);
                $tc = $em->getRepository(TypeCompte::class)->find($typecompte);
                /* var_dump($tc);
                die(); */
                $Compte->setTypecompte($tc);

                $em->persist($Compte);
                $em->flush();

                return $this->render('compte.html.twig', $data);
            }
    }
    /**
     * @Route("/ListCompte", name="ListCompte")
     */
    public function ListCompte()
    {
                $em = $this->getDoctrine()->getManager();
                $data['listCmp'] = $em->getRepository(Compte::class)->findAll();

                return $this->render('listCompte.html.twig', $data);
    }

}
