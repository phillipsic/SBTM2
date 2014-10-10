<?php

// src/Sbtmapp/SbtmBundle/DataFixtures/ORM/SessionFixtures.php

namespace Sbtmapp\SbtmBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sbtmapp\SbtmBundle\Entity\Session;

class SessionFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $session1 = new Session();
        $session1->setSessionName('A testing session 1');
        $session1->setStatusId($manager->merge($this->getReference('status-1')));
        $session1->setCharter('Session Charter');
        $session1->setAreas('Areas covered by the sesion.');
        $session1->setTestNotes('Notes to help the tester');
        $session1->setReady(true);
        $session1->setTester(null);
        $session1->setProjectId($manager->merge($this->getReference('project-1')));
        $session1->setCreated(new \DateTime());
        $session1->setUpdated($session1->getCreated());
        $manager->persist($session1);

        $session2 = new Session();
        $session2->setSessionName('A testing session 2');
        $session2->setStatusId($manager->merge($this->getReference('status-1')));
        $session2->setCharter('Session Charter');
        $session2->setAreas('Areas covered by the sesion.');
        $session2->setTestNotes('Notes to help the tester');
        $session2->setReady(true);
        $session2->setTester(null);
        $session2->setProjectId($manager->merge($this->getReference('project-2')));
        $session2->setCreated(new \DateTime());
        $session2->setUpdated($session2->getCreated());
        $manager->persist($session2);
        $manager->flush();


        $session3 = new Session();
        $session3->setSessionName('A testing session 3');
        $session3->setStatusId($manager->merge($this->getReference('status-1')));
        $session3->setCharter('Session Charter');
        $session3->setAreas('Areas covered by the sesion.');
        $session3->setTestNotes('Notes to help the tester');
        $session3->setReady(true);
        $session3->setTester(null);
        $session3->setProjectId($manager->merge($this->getReference('project-1')));
        $session3->setCreated(new \DateTime());
        $session3->setUpdated($session3->getCreated());
        $manager->persist($session3);
        $manager->flush();

        $session4 = new Session();
        $session4->setSessionName('A testing session 4');
        $session4->setStatusId($manager->merge($this->getReference('status-1')));
        $session4->setCharter('Session Charter');
        $session4->setAreas('Areas covered by the sesion.');
        $session4->setTestNotes('Notes to help the tester');
        $session4->setReady(true);
        $session4->setTester(null);
        $session4->setProjectId($manager->merge($this->getReference('project-2')));
        $session4->setCreated(new \DateTime());
        $session4->setUpdated($session4->getCreated());
        $manager->persist($session4);
        $manager->flush();


        $session5 = new Session();
        $session5->setSessionName('A testing session 5');
        $session5->setStatusId($manager->merge($this->getReference('status-1')));
        $session5->setCharter('Session Charter');
        $session5->setAreas('Areas covered by the sesion.');
        $session5->setTestNotes('Notes to help the tester');
        $session5->setReady(true);
        $session5->setTester(null);
        $session5->setProjectId($manager->merge($this->getReference('project-3')));
        $session5->setCreated(new \DateTime());
        $session5->setUpdated($session5->getCreated());
        $manager->persist($session5);
        $manager->flush();

        $session6 = new Session();
        $session6->setSessionName('A testing session 6');
        $session6->setStatusId($manager->merge($this->getReference('status-1')));
        $session6->setCharter('Session Charter');
        $session6->setAreas('Areas covered by the sesion.');
        $session6->setTestNotes('Notes to help the tester');
        $session6->setReady(true);
        $session6->setTester(null);
        $session6->setProjectId($manager->merge($this->getReference('project-2')));
        $session6->setCreated(new \DateTime());
        $session6->setUpdated($session6->getCreated());
        $manager->persist($session6);
        $manager->flush();


        $session7 = new Session();
        $session7->setSessionName('A testing session 7');
        $session7->setStatusId($manager->merge($this->getReference('status-1')));
        $session7->setCharter('Session Charter');
        $session7->setAreas('Areas covered by the sesion.');
        $session7->setTestNotes('Notes to help the tester');
        $session7->setReady(true);
        $session7->setTester(null);
        $session7->setProjectId($manager->merge($this->getReference('project-3')));
        $session7->setCreated(new \DateTime());
        $session7->setUpdated($session7->getCreated());
        $manager->persist($session7);
        $manager->flush();


        $this->addReference('session-1', $session1);
        $this->addReference('session-2', $session2);
        $this->addReference('session-3', $session3);
        $this->addReference('session-4', $session4);
        $this->addReference('session-5', $session5);
        $this->addReference('session-6', $session6);
        $this->addReference('session-7', $session7);
    }

    public function getOrder() {
        return 4;
    }

}
