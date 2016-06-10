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
use SimplonReunion\RepoPlaygroundBundle\Entity\Client;

class LoadClientData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $clients = [];
        $clients[] = new Client();
        $clients[0]->setNom('Hoareau')
            ->setPrenom('Henry')
            ->setEmail('henryhoreau@mail.com')
        ;
        $clients[] = new Client();
        $clients[1]->setNom('Payet')
            ->setPrenom('Mathieu')
            ->setEmail('mathieupayet@mail.com')
        ;
        $clients[] = new Client();
        $clients[2]->setNom('Boyer')
            ->setPrenom('Linda')
            ->setEmail('lindaboyer@mail.com')
        ;
        $clients[] = new Client();
        $clients[3]->setNom('Dupond')
            ->setPrenom('Micheline')
            ->setEmail('michelinedupond@mail.com')
        ;
        $clients[] = new Client();
        
        $clients[4]->setNom('Debogue')
            ->setPrenom('Vanessa')
            ->setEmail('vanessadebogue@mail.com')
        ;
        foreach ($clients as $index => $client) {
           
            $manager->persist($client);
            $this->addReference('client_'.$index, $client);
        }


        $manager->flush();
        
    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }

}
