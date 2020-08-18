<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\ClientPhysique;
use App\Form\ClientPhysiqueType;


class PhysiqueController extends AbstractController
{
    /**
    * @Route("/clientPhysique", name="addPhysique")
    */
    public function new(Request $request): Response
    {
        $ClientPhysique = new ClientPhysique();
        $form = $this->createForm(ClientPhysiqueType::class, $ClientPhysique);
        // traitement du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ClientPhysique);
            $em->flush();
            return $this->redirectToRoute('addPhysique');
        }
        return $this->render('physique/clientPhysique.html.twig', [
            "form" => $form->createView()
        ]);
    }
    /**
     * @Route("/ListPhysique", name="ListPhysique")
     */
    public function ListPhysique()
    {
                $em = $this->getDoctrine()->getManager();
                $data['listPh'] = $em->getRepository(ClientPhysique::class)->findAll();

                return $this->render('physique/listPhysique.html.twig', $data);
    }

}