<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ClientMoral;

class MoralController extends AbstractController
{
    /**
     * @Route("/addMoral", name="addMoral")
     */
    public function addMoral()
    {
        extract($_POST);

            if(isset($btn22)) {
                $em = $this->getDoctrine()->getManager();
                $ClientMoral = new ClientMoral();

                $ClientMoral->setNomentreprise($nomentreprise);
                $ClientMoral->setAdresseentreprise($adresseentreprise);
                $ClientMoral->setRaisonsocial($raisonsocial);
                $ClientMoral->setNumident($numident);

                $em->persist($ClientMoral);
                $em->flush();

                return $this->render('clientMoral.html.twig');
            }
    }
    /**
     * @Route("/ListMoral", name="ListMoral")
     */
    public function ListMoral()
    {
                $em = $this->getDoctrine()->getManager();
                $data['listC'] = $em->getRepository(ClientMoral::class)->findAll();

                return $this->render('listMoral.html.twig', $data);
    }

}
