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

        $liste = $this->getDoctrine()->getRepository("AppBundle:TraTravaux")->findAll();

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
}


