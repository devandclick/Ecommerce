<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;

class TestController extends Controller
{
    public function ajoutAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        /*$produit = new Produits();
        $produit->setCategorie('Legume');
        $produit->setDescription('La tomate ce mange.');
        $produit->setDisponible('1');
        $produit->setImage('http://www.niffylux.com/image-gratuite/Tomate__7_4b71e7e13f85b.jpg');
        $produit->setNom('Tomate');
        $produit->setPrix('0.99');
        $produit->setTva('19.6');
        
        $em->persist($produit);
        
        
        $produit2 = new Produits();
        $produit2->setCategorie('Legume');
        $produit2->setDescription('Le arico ce mange.');
        $produit2->setDisponible('1');
        $produit2->setImage('http://www.niffylux.com/image-gratuite/Tomate__7_4b71e7e13f85b.jpg');
        $produit2->setNom('Arico');
        $produit2->setPrix('0.97');
        $produit2->setTva('19.6');
        
        $em->persist($produit2);
        $em->flush();*/
        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();
        
        
        return $this->render('EcommerceBundle:Default:test.html.twig', array('produits' => $produits));
    }

}