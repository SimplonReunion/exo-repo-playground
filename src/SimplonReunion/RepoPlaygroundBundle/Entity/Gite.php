<?php

namespace SimplonReunion\RepoPlaygroundBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gite
 *
 * @ORM\Table(name="gite")
 * @ORM\Entity(repositoryClass="SimplonReunion\RepoPlaygroundBundle\Repository\GiteRepository")
 */
class Gite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="codePostal", type="integer")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;
    
    /**
     * @ORM\OneToOne(targetEntity="Gestionnaire",inversedBy="gite")
     **/
    private $gestionnaire;
    
    /**
     * @ORM\OneToMany(targetEntity="Chambre", mappedBy="gite")
     */
    private $chambres;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Gite
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Gite
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Gite
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Gite
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set gestionnaire
     *
     * @param \SimplonReunion\RepoPlaygroundBundle\Entity\Gestionnaire $gestionnaire
     *
     * @return Gite
     */
    public function setGestionnaire(\SimplonReunion\RepoPlaygroundBundle\Entity\Gestionnaire $gestionnaire = null)
    {
        $this->gestionnaire = $gestionnaire;

        return $this;
    }

    /**
     * Get gestionnaire
     *
     * @return \SimplonReunion\RepoPlaygroundBundle\Entity\Gestionnaire
     */
    public function getGestionnaire()
    {
        return $this->gestionnaire;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->chambres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add chambre
     *
     * @param \SimplonReunion\RepoPlaygroundBundle\Entity\Chambre $chambre
     *
     * @return Gite
     */
    public function addChambre(\SimplonReunion\RepoPlaygroundBundle\Entity\Chambre $chambre)
    {
        $this->chambres[] = $chambre;

        return $this;
    }

    /**
     * Remove chambre
     *
     * @param \SimplonReunion\RepoPlaygroundBundle\Entity\Chambre $chambre
     */
    public function removeChambre(\SimplonReunion\RepoPlaygroundBundle\Entity\Chambre $chambre)
    {
        $this->chambres->removeElement($chambre);
    }

    /**
     * Get chambres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChambres()
    {
        return $this->chambres;
    }
}
