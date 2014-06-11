<?php
namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class UtilisateursData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $utilisateur1 = new Utilisateurs();
        $utilisateur1->setUsername('benjamin');
        $utilisateur1->setEmail('benjamin@gmail.com');
        $utilisateur1->setEnabled(1);
        $utilisateur1->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur1)->encodePassword('poupou', $utilisateur1->getSalt()));
        $manager->persist($utilisateur1);
        
        $utilisateur2 = new Utilisateurs();
        $utilisateur2->setUsername('mathilde');
        $utilisateur2->setEmail('mathilde@gmail.com');
        $utilisateur2->setEnabled(1);
        $utilisateur2->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur2)->encodePassword('mathilde', $utilisateur2->getSalt()));
        $manager->persist($utilisateur2);
        
        $utilisateur3 = new Utilisateurs();
        $utilisateur3->setUsername('pauline');
        $utilisateur3->setEmail('pauline@gmail.com');
        $utilisateur3->setEnabled(1);
        $utilisateur3->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur3)->encodePassword('pauline', $utilisateur3->getSalt()));
        $manager->persist($utilisateur3);
        
        $utilisateur4 = new Utilisateurs();
        $utilisateur4->setUsername('tiffany');
        $utilisateur4->setEmail('tiffany@gmail.com');
        $utilisateur4->setEnabled(1);
        $utilisateur4->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur4)->encodePassword('tiffany', $utilisateur4->getSalt()));
        $manager->persist($utilisateur4);
         
        $utilisateur5 = new Utilisateurs();
        $utilisateur5->setUsername('dominique');
        $utilisateur5->setEmail('dominique@gmail.com');
        $utilisateur5->setEnabled(1);
        $utilisateur5->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur5)->encodePassword('dominique', $utilisateur5->getSalt()));
        $manager->persist($utilisateur5);
        
        $manager->flush();
        
        $this->addReference('utilisateur1', $utilisateur1);
        $this->addReference('utilisateur2', $utilisateur2);
        $this->addReference('utilisateur3', $utilisateur3);
        $this->addReference('utilisateur4', $utilisateur4);
        $this->addReference('utilisateur5', $utilisateur5);
    }
    
    public function getOrder()
    {
        return 5;
    }
}