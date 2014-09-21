<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateursAdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateurs = $em->getRepository('UtilisateursBundle:Utilisateurs')->findAll();
        
        return $this->render('UtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig', array('utilisateurs' => $utilisateurs));
    }
    
    public function utilisateurAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('UtilisateursBundle:Utilisateurs')->find($id);
        $route = $this->container->get('request')->get('_route');
        
        if ($route == 'adminAdressesUtilisateurs')
            return $this->render('UtilisateursBundle:Administration:Utilisateurs/layout/adresses.html.twig', array('utilisateur' => $utilisateur));
        else if ($route == 'adminFacturesUtilisateurs')
            return $this->render('UtilisateursBundle:Administration:Utilisateurs/layout/factures.html.twig', array('utilisateur' => $utilisateur));
        else 
            throw $this->createNotFoundException('La vue n\'existe pas.');
    }
}
