<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\CliClient;
use AppBundle\Form\CliClientType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;



/**
 * @Route("/client")
 */
class ClientController extends Controller
{
    /**
     * @Route("/liste", name="client.liste")
     */
    public function listeAction(Request $request)
    {
        $liste = $this->getDoctrine()->getRepository("AppBundle:CliClient")->findAll();

        $client = new CliClient();
        $form = $this->createForm(CliClientType::class, $client);
        $form->add("save", SubmitType::class, array('label' => 'Enregistrer le Client'));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();
            return $this->redirectToRoute("client.liste");
        }

        return $this->render("client/liste.html.twig", [
            "clients" => $liste,
            "form" => $form->createView(),
        ]);
    }
}


