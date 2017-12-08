<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\CliClient;
use AppBundle\Entity\TraTravaux;
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
    /**
     * @Route("/fiche/{id}", name="client.fiche", requirements={"id"="\d+"})
     */
    public function ficheAction($id, Request $request)
    {
        $client = $this->getDoctrine()->getRepository("AppBundle:CliClient")->find($id);

        $chantiers = $this->getDoctrine()->getRepository("AppBundle:TraTravaux")->findByCliOid($id);



        $form = $this->createForm(CliClientType::class, $client);
        $form->add("save", SubmitType::class, array('label' => 'Enregistrer les modifications'));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();
            $this->addFlash(
                'note',
                'Les modification sont enregitrés!'
            );

            return $this->redirectToRoute("client.fiche", ["id" => $id]);
        }

        return $this->render("client/fiche.html.twig", [
            "form" => $form->createView(),
            "idclient" => $id,
            "chantiers" => $chantiers,
        ]);

    }
}


