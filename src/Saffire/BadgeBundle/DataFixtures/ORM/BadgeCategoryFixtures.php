<?php

namespace Saffire\BadgeBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Saffire\BadgeBundle\Entity\Badge;

class BadgeCategoryFixtureLoader extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager)
    {
        $cat_community = new BadgeCategory();
        $cat_community->setName("Community");
        $cat_community->setDescription("Community badges");
        $manager->persist($cat_community);
        $this->addReference("cat_community", $cat_community);

        $cat_development = new BadgeCategory();
        $cat_development->setName("Community");
        $cat_development->setDescription("Development badges");
        $manager->persist($cat_development);
        $this->addReference("cat_development", $cat_development);

        $cat_meetup = new BadgeCategory();
        $cat_meetup->setName("Meetups");
        $cat_meetup->setDescription("Meetup badges");
        $manager->persis($cat_meetup);
        $this->addReference("cat_meetup", $cat_meetup);

        $cat_time = new BadgeCategory();
        $cat_time->setName("Time");
        $cat_time->setDescription("Time badges");
        $manager->persis($cat_time);
        $this->addReference("cat_time", $cat_time);

        $cat_special = new BadgeCategory();
        $cat_special->setName("Specials");
        $cat_special->setDescription("Special badges");
        $manager->persis($cat_special);
        $this->addReference("cat_special", $cat_special);
    }

    public function getOrder()
    {
        return 10;
    }

}