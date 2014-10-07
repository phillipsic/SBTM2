<?php

// src/Sbtmapp/SbtmBundle/DataFixtures/ORM/ProjectFixtures.php

namespace Sbtmapp\SbtmBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sbtmapp\SbtmBundle\Entity\Project;

class ProjectFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $project1 = new Project();
        $project1->setProjectName('A testing project');
        $project1->setProjectStartDate(new \DateTime());
        $project1->setProjectEndDate(new \DateTime());
        $project1->setProjectCompleted(False);
        $project1->setCreated(new \DateTime());
        $project1->setUpdated($project1->getCreated());
        $manager->persist($project1);

        $project2 = new Project();
        $project2->setProjectName('Another testing project');
        $project2->setProjectStartDate(new \DateTime());
        $project2->setProjectEndDate(new \DateTime());
        $project2->setProjectCompleted(False);
        $project2->setCreated(new \DateTime());
        $project2->setUpdated($project2->getCreated());
        $manager->persist($project2);

        $project3 = new Project();
        $project3->setProjectName('Another completed testing project');
        $project3->setProjectStartDate(new \DateTime());
        $project3->setProjectEndDate(new \DateTime());
        $project3->setProjectCompleted(TRUE);
        $project3->setCreated(new \DateTime());
        $project3->setUpdated($project3->getCreated());
        $manager->persist($project3);

        $manager->flush();

        $this->addReference('project-1', $project1);
        $this->addReference('project-2', $project2);
        $this->addReference('project-3', $project3);

    }

    public function getOrder() {
        return 3;
    }

}
