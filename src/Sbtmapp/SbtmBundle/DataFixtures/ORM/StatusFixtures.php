<?php

// src/Sbtmapp/SbtmBundle/DataFixtures/ORM/StatusFixtures.php

namespace Sbtmapp\SbtmBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sbtmapp\SbtmBundle\Entity\Status;

class StatusFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $status1 = new Status();
        $status1->setName('Todo');
        $status1->setCreated(new \DateTime());
        $status1->setUpdated($status1->getCreated());
        $manager->persist($status1);

        $status2 = new Status();
        $status2->setName('Submitted');
        $status2->setCreated(new \DateTime());
        $status2->setUpdated($status2->getCreated());
        $manager->persist($status2);

        $status3 = new Status();
        $status3->setName('Running');
        $status3->setCreated(new \DateTime());
        $status3->setUpdated($status3->getCreated());
        $manager->persist($status3);

        $status4 = new Status();
        $status4->setName('Approved');
        $status4->setCreated(new \DateTime());
        $status4->setUpdated($status4->getCreated());
        $manager->persist($status4);

        $status5 = new Status();
        $status5->setName('Finalise');
        $status5->setCreated(new \DateTime());
        $status5->setUpdated($status5->getCreated());
        $manager->persist($status5);
        $manager->flush();

        $this->addReference('status-1', $status1);
        $this->addReference('status-2', $status2);
        $this->addReference('status-3', $status3);
        $this->addReference('status-4', $status3);
        $this->addReference('status-5', $status3);
    }

    public function getOrder() {
        return 1;
    }

}
