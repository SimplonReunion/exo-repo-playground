<?php

namespace SimplonReunion\RepoPlaygroundBundle\DataFixtures\ORM;

/**
 * Description of LoadClientData
 *
 * @author 
 */
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SimplonReunion\RepoPlaygroundBundle\Entity\Gite;

class LoadGiteData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $gite1 = new Gite();
        $gite1->setNom('Gite du bonheur')
            ->setAdresse('5 rue du chat')
            ->setCodePostal(97433)
            ->setVille('Salazie')
            ->setGestionnaire($this->getReference('gestionnaire_0'))
        ;

        $gite2 = new Gite();
        $gite2->setNom('Gite du Koala Volant')
            ->setAdresse('55 rue du pompier')
            ->setCodePostal(97424)
            ->setVille('Saint Leu')
            ->setGestionnaire($this->getReference('gestionnaire_1'))
        ;

        $gite3 = new Gite();
        $gite3->setNom('Gite du 7 lucioles')
            ->setAdresse('45 rue du plat tournant')
            ->setCodePostal(97419)
            ->setVille('La Possession')
            ->setGestionnaire($this->getReference('gestionnaire_2'))
        ;

        $manager->persist($gite1);
        $manager->persist($gite2);
        $manager->persist($gite3);
        
        $manager->flush();
        
        $this->addReference('gite_0', $gite1);
        $this->addReference('gite_1', $gite2);
        $this->addReference('gite_2', $gite3);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 3;
    }

}
