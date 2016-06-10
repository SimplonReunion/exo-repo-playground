<?php

namespace SimplonReunion\RepoPlaygroundBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre")
 * @ORM\Entity(repositoryClass="SimplonReunion\RepoPlaygroundBundle\Repository\ChambreRepository")
 */
class Chambre
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
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="capacite", type="string", length=255)
     */
    private $capacite;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean")
     */
    private $available;
    
    /**
     * @ORM\OneToMany(targetEntity="Reservation", mappedBy="chambre")
     */
    private $reservations;
    
    /**
     * @Orm\ManyToOne(targetEntity="Gite", inversedBy="chambres")
     */
    private $gite;


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
     * Set numero
     *
     * @param string $numero
     *
     * @return Chambre
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set capacite
     *
     * @param string $capacite
     *
     * @return Chambre
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return string
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Chambre
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set available
     *
     * @param boolean $available
     *
     * @return Chambre
     */
    public function setAvailable( $available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return \bool
     */
    public function getAvailable()
    {
        return $this->available;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reservation
     *
     * @param \SimplonReunion\RepoPlaygroundBundle\Entity\Reservation $reservation
     *
     * @return Chambre
     */
    public function addReservation(\SimplonReunion\RepoPlaygroundBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \SimplonReunion\RepoPlaygroundBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\SimplonReunion\RepoPlaygroundBundle\Entity\Reservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Set gite
     *
     * @param \SimplonReunion\RepoPlaygroundBundle\Entity\Gite $gite
     *
     * @return Chambre
     */
    public function setGite(\SimplonReunion\RepoPlaygroundBundle\Entity\Gite $gite = null)
    {
        $this->gite = $gite;

        return $this;
    }

    /**
     * Get gite
     *
     * @return \SimplonReunion\RepoPlaygroundBundle\Entity\Gite
     */
    public function getGite()
    {
        return $this->gite;
    }
}
