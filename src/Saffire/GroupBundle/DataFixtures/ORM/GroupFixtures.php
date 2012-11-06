<?php

namespace Saffire\BadgeBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Saffire\GroupBundle\Entity\Group;

class GroupFixtureLoader extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager)
    {
        $group = new Group();
        $group->setName("Core");
        $group->setDescription("Core contributers");
        $manager->persist($group);

        $group = new Group();
        $group->setName("Saffire-NL");
        $group->setDescription("Dutch Saffire Users");
        $manager->persist($group);

        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }

}