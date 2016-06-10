<?php

namespace SimplonReunion\RepoPlaygroundBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="SimplonReunion\RepoPlaygroundBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="datetime")
     */
    private $dateReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @Orm\ManyToOne(targetEntity="Client", inversedBy="reservations")
     */
    private $client;
    
    /**
     * @Orm\ManyToOne(targetEntity="Chambre", inversedBy="reservations")
     */
    private $chambre;

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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Reservation
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set client
     *
     * @param \SimplonReunion\RepoPlaygroundBundle\Entity\Client $client
     *
     * @return Reservation
     */
    public function setClient(\SimplonReunion\RepoPlaygroundBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \SimplonReunion\RepoPlaygroundBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set chambre
     *
     * @param \SimplonReunion\RepoPlaygroundBundle\Entity\Chambre $chambre
     *
     * @return Reservation
     */
    public function setChambre(\SimplonReunion\RepoPlaygroundBundle\Entity\Chambre $chambre = null)
    {
        $this->chambre = $chambre;

        return $this;
    }

    /**
     * Get chambre
     *
     * @return \SimplonReunion\RepoPlaygroundBundle\Entity\Chambre
     */
    public function getChambre()
    {
        return $this->chambre;
    }
}
