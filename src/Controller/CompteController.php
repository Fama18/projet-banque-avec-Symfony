<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Compte;
use App\Form\CompteType;


class CompteController extends AbstractController
{
    /**
    * @Route("/compte", name="addCompte")
    */
    public function new(Request $request): Response
    {
        $Compte = new Compte();
        $form = $this->createForm(CompteType::class, $Compte);
        // traitement du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Compte);
            $em->flush();
            return $this->redirectToRoute('addCompte');
        }
        return $this->render('compte/compte.html.twig', [
            "form" => $form->createView()
        ]);
    }
     /**
     * @Route("/listCompte", name="listCompte")
     */
    /* public function ListCompte()
    {
                $em = $this->getDoctrine()->getManager();
                $data['listCmp'] = $em->getRepository(Compte::class)->findAll();

                return $this->render('listCompte.html.twig', $data);
    } */

}
