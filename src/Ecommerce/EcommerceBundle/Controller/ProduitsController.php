<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;

class ProduitsController extends Controller
{
    public function categorieAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->byCategorie($categorie);
        
        $categorie = $em->getRepository('EcommerceBundle:Categories')->find($categorie);
        if (!$categorie) throw $this->createNotFoundException('La page n\'existe pas.');
        
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
    }
    
    public function produitsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible' => 1));
        
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
    }
    
    public function presentationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);
        
        if (!$produit) throw $this->createNotFoundException('La page n\'existe pas.');
        
        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig', array('produit' => $produit));
    }
    
    public function rechercheAction() 
    {
        $form = $this->createForm(new RechercheType());
        return $this->render('EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));
    }
    
    public function rechercheTraitementAction() 
    {
        $form = $this->createForm(new RechercheType());
        
        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $produits = $em->getRepository('EcommerceBundle:Produits')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }
        
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
    }
}