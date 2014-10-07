<?php

// src/Sbtmapp/SbtmBundle/DataFixtures/ORM/StrategysFixtures.php

namespace Sbtmapp\SbtmBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sbtmapp\SbtmBundle\Entity\Strategy;

class StrategyFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $strategys1 = new Strategy();
        $strategys1->setName('Acceptance');
        $strategys1->setCreated(new \DateTime());
        $strategys1->setUpdated($strategys1->getCreated());
        $manager->persist($strategys1);

        $strategys2 = new Strategy();
        $strategys2->setName('Exploration & Analysis');
        $strategys2->setCreated(new \DateTime());
        $strategys2->setUpdated($strategys2->getCreated());
        $manager->persist($strategys2);

        $strategys3 = new Strategy();
        $strategys3->setName('Regression');
        $strategys3->setCreated(new \DateTime());
        $strategys3->setUpdated($strategys3->getCreated());
        $manager->persist($strategys3);

        $strategys4 = new Strategy();
        $strategys4->setName('Bug Validation');
        $strategys4->setCreated(new \DateTime());
        $strategys4->setUpdated($strategys4->getCreated());
        $manager->persist($strategys4);

        $strategys5 = new Strategy();
        $strategys5->setName('Final Validation');
        $strategys5->setCreated(new \DateTime());
        $strategys5->setUpdated($strategys5->getCreated());
        $manager->persist($strategys5);
        $manager->flush();

        $this->addReference('strategys-1', $strategys1);
        $this->addReference('strategys-2', $strategys2);
        $this->addReference('strategys-3', $strategys3);
        $this->addReference('strategys-4', $strategys3);
        $this->addReference('strategys-5', $strategys3);
    }

    public function getOrder() {
        return 2;
    }

}
