<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateursController extends Controller
{
    public function facturesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('EcommerceBundle:Commandes')->byFacture($this->getUser());
        
        return $this->render('UtilisateursBundle:Default:layout/facture.html.twig', array('factures' => $factures));
    }
    
    public function facturesPDFAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('EcommerceBundle:Commandes')->findOneBy(array('utilisateur' => $this->getUser(),
                                                                                     'valider' => 1,
                                                                                     'id' => $id));
        
        if (!$facture) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('facutres'));
        }
        
        $html = $this->renderView('UtilisateursBundle:Default:layout/facturePDF.html.twig', array('facture' => $facture));
        
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
        $html2pdf->pdf->SetAuthor('DevAndClick');
        $html2pdf->pdf->SetTitle('Facture '.$facture->getReference());
        $html2pdf->pdf->SetSubject('Facture DevAndClick');
        $html2pdf->pdf->SetKeywords('facture,devandclick');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        $html2pdf->Output('Facture.pdf');
         
        $response = new Response();
        $response->headers->set('Content-type' , 'application/pdf');
        
        return $response;
    }
}
