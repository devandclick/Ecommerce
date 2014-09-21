<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tva
 *
 * @ORM\Table("tva")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\TvaRepository")
 */
class Tva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="multiplicate", type="float")
     */
    private $multiplicate;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="valeur", type="float")
     */
    private $valeur;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set multiplicate
     *
     * @param float $multiplicate
     * @return Tva
     */
    public function setMultiplicate($multiplicate)
    {
        $this->multiplicate = $multiplicate;

        return $this;
    }

    /**
     * Get multiplicate
     *
     * @return float 
     */
    public function getMultiplicate()
    {
        return $this->multiplicate;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Tva
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set valeur
     *
     * @param float $valeur
     * @return Tva
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return float 
     */
    public function getValeur()
    {
        return $this->valeur;
    }
    
    public function __toString()
    {
        return $this->getNom();
    }
}
