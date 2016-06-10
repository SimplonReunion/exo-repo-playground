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
use SimplonReunion\RepoPlaygroundBundle\Entity\Gestionnaire;

class LoadGestionnaireData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $gestionnaire1 = new Gestionnaire();
        $gestionnaire1->setNom('Babel')
            ->setPrenom('Karl')
            ->setTel('0692369852')
            ->setEmail('karlbabel@mail.com')
        ;
        $gestionnaire2 = new Gestionnaire();
        $gestionnaire2->setNom('Knowlas')
            ->setPrenom('Bayonce')
            ->setTel('0692369852')
            ->setEmail('bayonceknowlas.com')
        ;

        $gestionnaire3 = new Gestionnaire();
        $gestionnaire3->setNom('Barbara')
            ->setPrenom('Stressante')
            ->setTel('0692369852')
            ->setEmail('barbarastressante@mail.com')
        ;

        $manager->persist($gestionnaire1);
        $manager->persist($gestionnaire2);
        $manager->persist($gestionnaire3);
        
        $manager->flush();
        
        $this->addReference('gestionnaire_0', $gestionnaire1);
        $this->addReference('gestionnaire_1', $gestionnaire2);
        $this->addReference('gestionnaire_2', $gestionnaire3);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }

}
