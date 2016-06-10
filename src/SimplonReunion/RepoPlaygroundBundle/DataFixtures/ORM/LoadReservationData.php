<?php

namespace SimplonReunion\RepoPlaygroundBundle\DataFixtures\ORM;

/**
 * Description of LoadChambreData
 *
 * @author 
 */

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SimplonReunion\RepoPlaygroundBundle\Entity\Reservation;

class LoadReservationData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //Gite 1
        $chambre1Gite1 = $this->getReference('chambre1Gite1');
        $chambre2Gite1 = $this->getReference('chambre2Gite1');
        
        //Gite 2
        $chambre1Gite2 = $this->getReference('chambre1Gite2');
        $chambre2Gite2 = $this->getReference('chambre2Gite2');
        
        //Gite 3      
        $chambre2Gite3 = $this->getReference('chambre2Gite3');
        $chambre3Gite3 = $this->getReference('chambre3Gite1');
        
        
        //client
        $client1 = $this->getReference('client_0');
        $client2 = $this->getReference('client_1');
        $client3 = $this->getReference('client_2');
        
        $reservation1 = $this->creerReservation($chambre2Gite1, $client1, new \DateTime("2016-06-28"), "Réservé");
        $reservation2 = $this->creerReservation($chambre1Gite2, $client1, new \DateTime("2016-07-14"), "Réservé");
        $reservation3 = $this->creerReservation($chambre2Gite3, $client3, new \DateTime("2016-08-09"), "Réservé");
        $reservation4 = $this->creerReservation($chambre3Gite3, $client3, new \DateTime("2016-07-10"), "Réservé");
        
        $reservation5 = $this->creerReservation($chambre2Gite2, $client3, new \DateTime("2016-06-09"), "En cours");
        $reservation6 = $this->creerReservation($chambre1Gite1, $client2, new \DateTime("2016-09-11"), "En cours");
        
        $manager->persist($reservation1);
        $manager->persist($reservation2);
        $manager->persist($reservation3);
        $manager->persist($reservation4);
        $manager->persist($reservation5);
        $manager->persist($reservation6);
        
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 5;
    }
    
    protected function creerReservation($chambre,$client,$dateReservation,$statut){
        $reservation = new Reservation();
        $reservation->setChambre($chambre)
            ->setClient($client)
            ->setDateReservation($dateReservation)
            ->setStatut($statut)
            ;
        return $reservation;
    }
}