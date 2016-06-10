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
use SimplonReunion\RepoPlaygroundBundle\Entity\Chambre;

class LoadChambreData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        
        //Gite 1
        $chambre1Gite1 = $this->creerChambre('1A', true, 2, 50, $this->getReference('gite_0'));
        $chambre2Gite1 = $this->creerChambre('2C', false, 4, 150, $this->getReference('gite_0'));
        $chambre3Gite1 = $this->creerChambre('3B', true, 4, 250, $this->getReference('gite_0'));
        
        //Gite 2
        $chambre1Gite2 = $this->creerChambre('1D', false, 2, 75, $this->getReference('gite_1'));
        $chambre2Gite2 = $this->creerChambre('12A', true, 2, 100, $this->getReference('gite_1'));
        $chambre3Gite2 = $this->creerChambre('7A', true, 4, 250, $this->getReference('gite_1'));
        
        //Gite 3      
        $chambre1Gite3 = $this->creerChambre('17D', true, 4, 175, $this->getReference('gite_2'));
        $chambre2Gite3 = $this->creerChambre('172A', false, 2, 50, $this->getReference('gite_2'));
        $chambre3Gite3 = $this->creerChambre('4A', false, 4, 250, $this->getReference('gite_2'));
        
        //persist
        $manager->persist($chambre1Gite1);
        $manager->persist($chambre2Gite1);
        $manager->persist($chambre3Gite1);
        $manager->persist($chambre1Gite2);
        $manager->persist($chambre2Gite2);
        $manager->persist($chambre3Gite2);
        $manager->persist($chambre1Gite3);
        $manager->persist($chambre2Gite3);
        $manager->persist($chambre3Gite3);

        $manager->flush();
        
        //add references
        $this->addReference('chambre1Gite1', $chambre1Gite1);
        $this->addReference('chambre2Gite1', $chambre2Gite1);
        $this->addReference('chambre3Gite1', $chambre3Gite1);
        $this->addReference('chambre1Gite2', $chambre1Gite2);
        $this->addReference('chambre2Gite2', $chambre2Gite2);
        $this->addReference('chambre3Gite2', $chambre3Gite2);
        $this->addReference('chambre1Gite3', $chambre1Gite3);
        $this->addReference('chambre2Gite3', $chambre2Gite3);
        $this->addReference('chambre3Gite3', $chambre3Gite3);
      
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 4;
    }

    protected function creerChambre($numero, $available, $capacite, $prix, $gite)
    {
        $chambre = new Chambre();
        $chambre->setNumero($numero)
            ->setAvailable($available)//Disponibilité aléatoire
            ->setCapacite($capacite)//Capacité aléatoire
            ->setPrix($prix)//Prix aléatoire
            ->setGite($gite)
        ;
        return $chambre;
    }

}
