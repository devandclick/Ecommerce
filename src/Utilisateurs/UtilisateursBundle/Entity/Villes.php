<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Villes
 *
 * @ORM\Table(name="villes", uniqueConstraints={@ORM\UniqueConstraint(name="ville_code_commune_2", columns={"ville_code_commune"}), @ORM\UniqueConstraint(name="ville_slug", columns={"ville_slug"})}, indexes={@ORM\Index(name="ville_departement", columns={"ville_departement"}), @ORM\Index(name="ville_nom", columns={"ville_nom"}), @ORM\Index(name="ville_nom_reel", columns={"ville_nom_reel"}), @ORM\Index(name="ville_code_postal", columns={"ville_code_postal"}), @ORM\Index(name="ville_longitude_latitude_deg", columns={"ville_longitude_deg", "ville_latitude_deg"}), @ORM\Index(name="ville_nom_soundex", columns={"ville_nom_soundex"}), @ORM\Index(name="ville_nom_metaphone", columns={"ville_nom_metaphone"}), @ORM\Index(name="ville_population_2010", columns={"ville_population_2010"}), @ORM\Index(name="ville_nom_simple", columns={"ville_nom_simple"})})
 * @ORM\Entity
 */
class Villes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ville_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $villeId;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_departement", type="string", length=3, nullable=true)
     */
    private $villeDepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_slug", type="string", length=255, nullable=true)
     */
    private $villeSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_nom", type="string", length=45, nullable=true)
     */
    private $villeNom;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_nom_simple", type="string", length=45, nullable=true)
     */
    private $villeNomSimple;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_nom_reel", type="string", length=45, nullable=true)
     */
    private $villeNomReel;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_nom_soundex", type="string", length=20, nullable=true)
     */
    private $villeNomSoundex;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_nom_metaphone", type="string", length=22, nullable=true)
     */
    private $villeNomMetaphone;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_code_postal", type="string", length=255, nullable=true)
     */
    private $villeCodePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_commune", type="string", length=3, nullable=true)
     */
    private $villeCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_code_commune", type="string", length=5, nullable=false)
     */
    private $villeCodeCommune;

    /**
     * @var integer
     *
     * @ORM\Column(name="ville_arrondissement", type="smallint", nullable=true)
     */
    private $villeArrondissement;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_canton", type="string", length=4, nullable=true)
     */
    private $villeCanton;

    /**
     * @var integer
     *
     * @ORM\Column(name="ville_amdi", type="smallint", nullable=true)
     */
    private $villeAmdi;

    /**
     * @var integer
     *
     * @ORM\Column(name="ville_population_2010", type="integer", nullable=true)
     */
    private $villePopulation2010;

    /**
     * @var integer
     *
     * @ORM\Column(name="ville_population_1999", type="integer", nullable=true)
     */
    private $villePopulation1999;

    /**
     * @var integer
     *
     * @ORM\Column(name="ville_population_2012", type="integer", nullable=true)
     */
    private $villePopulation2012;

    /**
     * @var integer
     *
     * @ORM\Column(name="ville_densite_2010", type="integer", nullable=true)
     */
    private $villeDensite2010;

    /**
     * @var float
     *
     * @ORM\Column(name="ville_surface", type="float", precision=10, scale=0, nullable=true)
     */
    private $villeSurface;

    /**
     * @var float
     *
     * @ORM\Column(name="ville_longitude_deg", type="float", precision=10, scale=0, nullable=true)
     */
    private $villeLongitudeDeg;

    /**
     * @var float
     *
     * @ORM\Column(name="ville_latitude_deg", type="float", precision=10, scale=0, nullable=true)
     */
    private $villeLatitudeDeg;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_longitude_grd", type="string", length=9, nullable=true)
     */
    private $villeLongitudeGrd;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_latitude_grd", type="string", length=8, nullable=true)
     */
    private $villeLatitudeGrd;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_longitude_dms", type="string", length=9, nullable=true)
     */
    private $villeLongitudeDms;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_latitude_dms", type="string", length=8, nullable=true)
     */
    private $villeLatitudeDms;

    /**
     * @var integer
     *
     * @ORM\Column(name="ville_zmin", type="integer", nullable=true)
     */
    private $villeZmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="ville_zmax", type="integer", nullable=true)
     */
    private $villeZmax;



    /**
     * Get villeId
     *
     * @return integer 
     */
    public function getVilleId()
    {
        return $this->villeId;
    }

    /**
     * Set villeDepartement
     *
     * @param string $villeDepartement
     * @return Villes
     */
    public function setVilleDepartement($villeDepartement)
    {
        $this->villeDepartement = $villeDepartement;

        return $this;
    }

    /**
     * Get villeDepartement
     *
     * @return string 
     */
    public function getVilleDepartement()
    {
        return $this->villeDepartement;
    }

    /**
     * Set villeSlug
     *
     * @param string $villeSlug
     * @return Villes
     */
    public function setVilleSlug($villeSlug)
    {
        $this->villeSlug = $villeSlug;

        return $this;
    }

    /**
     * Get villeSlug
     *
     * @return string 
     */
    public function getVilleSlug()
    {
        return $this->villeSlug;
    }

    /**
     * Set villeNom
     *
     * @param string $villeNom
     * @return Villes
     */
    public function setVilleNom($villeNom)
    {
        $this->villeNom = $villeNom;

        return $this;
    }

    /**
     * Get villeNom
     *
     * @return string 
     */
    public function getVilleNom()
    {
        return $this->villeNom;
    }

    /**
     * Set villeNomSimple
     *
     * @param string $villeNomSimple
     * @return Villes
     */
    public function setVilleNomSimple($villeNomSimple)
    {
        $this->villeNomSimple = $villeNomSimple;

        return $this;
    }

    /**
     * Get villeNomSimple
     *
     * @return string 
     */
    public function getVilleNomSimple()
    {
        return $this->villeNomSimple;
    }

    /**
     * Set villeNomReel
     *
     * @param string $villeNomReel
     * @return Villes
     */
    public function setVilleNomReel($villeNomReel)
    {
        $this->villeNomReel = $villeNomReel;

        return $this;
    }

    /**
     * Get villeNomReel
     *
     * @return string 
     */
    public function getVilleNomReel()
    {
        return $this->villeNomReel;
    }

    /**
     * Set villeNomSoundex
     *
     * @param string $villeNomSoundex
     * @return Villes
     */
    public function setVilleNomSoundex($villeNomSoundex)
    {
        $this->villeNomSoundex = $villeNomSoundex;

        return $this;
    }

    /**
     * Get villeNomSoundex
     *
     * @return string 
     */
    public function getVilleNomSoundex()
    {
        return $this->villeNomSoundex;
    }

    /**
     * Set villeNomMetaphone
     *
     * @param string $villeNomMetaphone
     * @return Villes
     */
    public function setVilleNomMetaphone($villeNomMetaphone)
    {
        $this->villeNomMetaphone = $villeNomMetaphone;

        return $this;
    }

    /**
     * Get villeNomMetaphone
     *
     * @return string 
     */
    public function getVilleNomMetaphone()
    {
        return $this->villeNomMetaphone;
    }

    /**
     * Set villeCodePostal
     *
     * @param string $villeCodePostal
     * @return Villes
     */
    public function setVilleCodePostal($villeCodePostal)
    {
        $this->villeCodePostal = $villeCodePostal;

        return $this;
    }

    /**
     * Get villeCodePostal
     *
     * @return string 
     */
    public function getVilleCodePostal()
    {
        return $this->villeCodePostal;
    }

    /**
     * Set villeCommune
     *
     * @param string $villeCommune
     * @return Villes
     */
    public function setVilleCommune($villeCommune)
    {
        $this->villeCommune = $villeCommune;

        return $this;
    }

    /**
     * Get villeCommune
     *
     * @return string 
     */
    public function getVilleCommune()
    {
        return $this->villeCommune;
    }

    /**
     * Set villeCodeCommune
     *
     * @param string $villeCodeCommune
     * @return Villes
     */
    public function setVilleCodeCommune($villeCodeCommune)
    {
        $this->villeCodeCommune = $villeCodeCommune;

        return $this;
    }

    /**
     * Get villeCodeCommune
     *
     * @return string 
     */
    public function getVilleCodeCommune()
    {
        return $this->villeCodeCommune;
    }

    /**
     * Set villeArrondissement
     *
     * @param integer $villeArrondissement
     * @return Villes
     */
    public function setVilleArrondissement($villeArrondissement)
    {
        $this->villeArrondissement = $villeArrondissement;

        return $this;
    }

    /**
     * Get villeArrondissement
     *
     * @return integer 
     */
    public function getVilleArrondissement()
    {
        return $this->villeArrondissement;
    }

    /**
     * Set villeCanton
     *
     * @param string $villeCanton
     * @return Villes
     */
    public function setVilleCanton($villeCanton)
    {
        $this->villeCanton = $villeCanton;

        return $this;
    }

    /**
     * Get villeCanton
     *
     * @return string 
     */
    public function getVilleCanton()
    {
        return $this->villeCanton;
    }

    /**
     * Set villeAmdi
     *
     * @param integer $villeAmdi
     * @return Villes
     */
    public function setVilleAmdi($villeAmdi)
    {
        $this->villeAmdi = $villeAmdi;

        return $this;
    }

    /**
     * Get villeAmdi
     *
     * @return integer 
     */
    public function getVilleAmdi()
    {
        return $this->villeAmdi;
    }

    /**
     * Set villePopulation2010
     *
     * @param integer $villePopulation2010
     * @return Villes
     */
    public function setVillePopulation2010($villePopulation2010)
    {
        $this->villePopulation2010 = $villePopulation2010;

        return $this;
    }

    /**
     * Get villePopulation2010
     *
     * @return integer 
     */
    public function getVillePopulation2010()
    {
        return $this->villePopulation2010;
    }

    /**
     * Set villePopulation1999
     *
     * @param integer $villePopulation1999
     * @return Villes
     */
    public function setVillePopulation1999($villePopulation1999)
    {
        $this->villePopulation1999 = $villePopulation1999;

        return $this;
    }

    /**
     * Get villePopulation1999
     *
     * @return integer 
     */
    public function getVillePopulation1999()
    {
        return $this->villePopulation1999;
    }

    /**
     * Set villePopulation2012
     *
     * @param integer $villePopulation2012
     * @return Villes
     */
    public function setVillePopulation2012($villePopulation2012)
    {
        $this->villePopulation2012 = $villePopulation2012;

        return $this;
    }

    /**
     * Get villePopulation2012
     *
     * @return integer 
     */
    public function getVillePopulation2012()
    {
        return $this->villePopulation2012;
    }

    /**
     * Set villeDensite2010
     *
     * @param integer $villeDensite2010
     * @return Villes
     */
    public function setVilleDensite2010($villeDensite2010)
    {
        $this->villeDensite2010 = $villeDensite2010;

        return $this;
    }

    /**
     * Get villeDensite2010
     *
     * @return integer 
     */
    public function getVilleDensite2010()
    {
        return $this->villeDensite2010;
    }

    /**
     * Set villeSurface
     *
     * @param float $villeSurface
     * @return Villes
     */
    public function setVilleSurface($villeSurface)
    {
        $this->villeSurface = $villeSurface;

        return $this;
    }

    /**
     * Get villeSurface
     *
     * @return float 
     */
    public function getVilleSurface()
    {
        return $this->villeSurface;
    }

    /**
     * Set villeLongitudeDeg
     *
     * @param float $villeLongitudeDeg
     * @return Villes
     */
    public function setVilleLongitudeDeg($villeLongitudeDeg)
    {
        $this->villeLongitudeDeg = $villeLongitudeDeg;

        return $this;
    }

    /**
     * Get villeLongitudeDeg
     *
     * @return float 
     */
    public function getVilleLongitudeDeg()
    {
        return $this->villeLongitudeDeg;
    }

    /**
     * Set villeLatitudeDeg
     *
     * @param float $villeLatitudeDeg
     * @return Villes
     */
    public function setVilleLatitudeDeg($villeLatitudeDeg)
    {
        $this->villeLatitudeDeg = $villeLatitudeDeg;

        return $this;
    }

    /**
     * Get villeLatitudeDeg
     *
     * @return float 
     */
    public function getVilleLatitudeDeg()
    {
        return $this->villeLatitudeDeg;
    }

    /**
     * Set villeLongitudeGrd
     *
     * @param string $villeLongitudeGrd
     * @return Villes
     */
    public function setVilleLongitudeGrd($villeLongitudeGrd)
    {
        $this->villeLongitudeGrd = $villeLongitudeGrd;

        return $this;
    }

    /**
     * Get villeLongitudeGrd
     *
     * @return string 
     */
    public function getVilleLongitudeGrd()
    {
        return $this->villeLongitudeGrd;
    }

    /**
     * Set villeLatitudeGrd
     *
     * @param string $villeLatitudeGrd
     * @return Villes
     */
    public function setVilleLatitudeGrd($villeLatitudeGrd)
    {
        $this->villeLatitudeGrd = $villeLatitudeGrd;

        return $this;
    }

    /**
     * Get villeLatitudeGrd
     *
     * @return string 
     */
    public function getVilleLatitudeGrd()
    {
        return $this->villeLatitudeGrd;
    }

    /**
     * Set villeLongitudeDms
     *
     * @param string $villeLongitudeDms
     * @return Villes
     */
    public function setVilleLongitudeDms($villeLongitudeDms)
    {
        $this->villeLongitudeDms = $villeLongitudeDms;

        return $this;
    }

    /**
     * Get villeLongitudeDms
     *
     * @return string 
     */
    public function getVilleLongitudeDms()
    {
        return $this->villeLongitudeDms;
    }

    /**
     * Set villeLatitudeDms
     *
     * @param string $villeLatitudeDms
     * @return Villes
     */
    public function setVilleLatitudeDms($villeLatitudeDms)
    {
        $this->villeLatitudeDms = $villeLatitudeDms;

        return $this;
    }

    /**
     * Get villeLatitudeDms
     *
     * @return string 
     */
    public function getVilleLatitudeDms()
    {
        return $this->villeLatitudeDms;
    }

    /**
     * Set villeZmin
     *
     * @param integer $villeZmin
     * @return Villes
     */
    public function setVilleZmin($villeZmin)
    {
        $this->villeZmin = $villeZmin;

        return $this;
    }

    /**
     * Get villeZmin
     *
     * @return integer 
     */
    public function getVilleZmin()
    {
        return $this->villeZmin;
    }

    /**
     * Set villeZmax
     *
     * @param integer $villeZmax
     * @return Villes
     */
    public function setVilleZmax($villeZmax)
    {
        $this->villeZmax = $villeZmax;

        return $this;
    }

    /**
     * Get villeZmax
     *
     * @return integer 
     */
    public function getVilleZmax()
    {
        return $this->villeZmax;
    }
}
