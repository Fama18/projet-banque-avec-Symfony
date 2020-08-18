<?php

namespace App\Controller;

use App\Entity\ClientMoral;
use App\Form\ClientMoralType;
use App\Repository\ClientMoralRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class MoralController extends AbstractController
{
    /**
    * @Route("/clientMoral", name="addMoral")
    */
    public function new(Request $request): Response
    {
        $ClientMoral = new ClientMoral();
        $form = $this->createForm(ClientMoralType::class, $ClientMoral);
        // traitement du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ClientMoral);
            $em->flush();
            return $this->redirectToRoute('addMoral');
        }
        return $this->render('moral/clientMoral.html.twig', [
            "form" => $form->createView()
        ]);
    }
    /**
     * @Route("/ListMoral", name="ListMorals")
     */
    public function ListMoral(ClientMoralRepository $repository)
    {
            $ClientMorals = $repository->findAll();

            return $this->render('moral/listMoral.html.twig', [
                "ClientMorals" => $ClientMorals,
            ]);
    }

}
