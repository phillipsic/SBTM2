<?php

// src/Sbtmapp/SbtmBundle/DataFixtures/ORM/StrategysFixtures.php

namespace Sbtmapp\SbtmBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UserFixtures implements FixtureInterface, ContainerAwareInterface {

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {

        $userManager = $this->container->get('fos_user.user_manager');

        // Create a new user
        $user1 = $userManager->createUser();
        $user1->setUsername('user');
        $user1->setEmail('user@domain.com');
        $user1->setPlainPassword('user');
        $user1->setEnabled(true);
        $user1->setRoles(array('ROLE_USER'));
        $manager->persist($user1);
        $manager->flush();

        $user2 = $userManager->createUser();
        $user2->setUsername('admin');
        $user2->setEmail('admin@domain.com');
        $user2->setPlainPassword('admin');
        $user2->setEnabled(true);
        $user2->setRoles(array('ROLE_ADMIN'));
        $manager->persist($user2);
        $manager->flush();
    }

}
