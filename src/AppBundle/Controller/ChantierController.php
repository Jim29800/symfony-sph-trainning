<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\TraTravaux;
use AppBundle\Entity\CliClient;
use AppBundle\Form\TraTravauxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * @Route("/chantier")
 */
class ChantierController extends Controller
{
    /**
     * @Route("/liste", name="chantier.liste")
     */
    public function listeAction(Request $request)
    {
        $listClient = $this->getDoctrine()->getRepository("AppBundle:CliClient")->findAll();
        $client = $listClient[0];

        $liste = $this->getDoctrine()->getRepository("AppBundle:TraTravaux")->findBy(array(), array('traDateDebut' => 'ASC'));

        $chantier = new TraTravaux();
        $form = $this->createForm(TraTravauxType::class, $chantier);
        $form->add('cliOid', ChoiceType::class, array(
            'label' => 'Selectionner le client',
            'choices' => array("Selectionner le client : " => $client),
            'choice_label' => 'cliNom',
            'choice_value' => 'cliOid',
        ));
        $form->add("save", SubmitType::class, array('label' => 'Enregistrer le Chantier'));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chantier);
            $em->flush();
            return $this->redirectToRoute("chantier.liste");
        }

        return $this->render("chantier/liste.html.twig", [
            "chantiers" => $liste,
            "form" => $form->createView(),
        ]);
    }
    /**
     * @Route("/creation", name="chantier.creation")
     */
    public function creationAction(Request $request)
    {
        $idclient = $request->request->get('idclient');


        $client = $this->getDoctrine()->getRepository("AppBundle:CliClient")->find($idclient);

        $chantier = new TraTravaux();
        
        $chantier->setTraVerif(0);
        $chantier->setCliOid($client);
        
        
        
        $form = $this->createForm(TraTravauxType::class, $chantier);

        $form->add("save", SubmitType::class, array('label' => 'Enregistrer le Chantier'));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chantier);
            $em->flush();
            return $this->redirectToRoute("client.fiche", ["id" => $idclient]);
        }


        return $this->render("chantier/creation.html.twig", [
            "form" => $form->createView(),
            "idclient" => $idclient,
        ]);
    }

    /**
     * @Route("/fiche/{id}", name="chantier.fiche", requirements={"id"="\d+"})
     */
    public function ficheAction($id, Request $request)
    {
        $chantier = $this->getDoctrine()->getRepository("AppBundle:TraTravaux")->find($id);


        $form = $this->createForm(TraTravauxType::class, $chantier);
        $form->add('traVerif', null, ["label" => "Chantier vérifier"]);
        $form->add("save", SubmitType::class, array('label' => 'Enregistrer les modifications'));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chantier);
            $em->flush();
            $this->addFlash(
                'note',
                'Les modifications sont enregitrées!'
            );

            return $this->redirectToRoute("chantier.fiche", ["id" => $id]);
        }


        return $this->render("chantier/fiche.html.twig", [
            "chantier" => $chantier,
            "form" => $form->createView(),
        ]);
    }
}















