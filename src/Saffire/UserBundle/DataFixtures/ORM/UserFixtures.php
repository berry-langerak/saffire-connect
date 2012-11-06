<?php

namespace Saffire\BadgeBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Saffire\UserBundle\Entity\User;

class BadgeFixtureLoader extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setName("johndoe");
        $user->setFirstName("John");
        $user->setLastName("Doe");
        $user->setEmail("johndoe@example.org");
//        $user->addGroup();
//        $user->addBadge();
        $manager->persist($user);

        $user = new User();
        $user->setName("janedoe");
        $user->setFirstName("Jane");
        $user->setLastName("Doe");
        $user->setEmail("janedoe@example.org");
//        $user->addGroup();
//        $user->addBadge();
        $manager->persist($user);

        $manager->flush();
    }

    public function getOrder()
    {
        return 30;
    }

}