<?php

namespace Saffire\BadgeBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Saffire\BadgeBundle\Entity\Badge;

class BadgeFixtureLoader extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager)
    {
        $badge = new Badge();
        $badge->setName("Community");
        $badge->setDescription("Received upon registration on the site.");
        $badge->setImage("001.jpg");
        $badge->setCategory($this->getReference("cat_community"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Well Connected");
        $badge->setDescription("Over 50 connections on the site.");
        $badge->setImage("002.jpg");
        $badge->setCategory($this->getReference("cat_community"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Groupie");
        $badge->setDescription("Part of at least 10 groups.");
        $badge->setImage("003.jpg");
        $badge->setCategory($this->getReference("cat_community"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Early Adopter");
        $badge->setDescription("First 50 community users.");
        $badge->setImage("004.jpg");
        $badge->setCategory($this->getReference("cat_community"));
        $manager->persist($badge);




        $badge = new Badge();
        $badge->setName("Core Development");
        $badge->setDescription("Core contributer.");
        $badge->setImage("006.jpg");
        $badge->setCategory($this->getReference("cat_development"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Contributor");
        $badge->setDescription("Contributed to the Saffire language.");
        $badge->setImage("007.jpg");
        $badge->setCategory($this->getReference("cat_development"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Documentor");
        $badge->setDescription("Contributed to the documentation.");
        $badge->setImage("008.jpg");
        $badge->setCategory($this->getReference("cat_development"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Bug reporter");
        $badge->setDescription("Added a bug in the Saffire bugtracker.");
        $badge->setImage("009.jpg");
        $badge->setCategory($this->getReference("cat_development"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("RFC Contributor");
        $badge->setDescription("Contributed to saffire RFCs.");
        $badge->setImage("010.jpg");
        $badge->setCategory($this->getReference("cat_development"));
        $manager->persist($badge);




        $badge = new Badge();
        $badge->setName("Inaugeral Meetup");
        $badge->setDescription("Attended the first ever meetup.");
        $badge->setImage("011.jpg");
        $badge->setCategory($this->getReference("cat_meetup"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Meetup Attendees");
        $badge->setDescription("Attended a meetup.");
        $badge->setImage("012.jpg");
        $badge->setCategory($this->getReference("cat_meetup"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Conference Attendee");
        $badge->setDescription("Attended a conference.");
        $badge->setImage("013.jpg");
        $badge->setCategory($this->getReference("cat_meetup"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Meetup Speaker");
        $badge->setDescription("Spoke at a meetup.");
        $badge->setImage("014.jpg");
        $badge->setCategory($this->getReference("cat_meetup"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Conference Speaker");
        $badge->setDescription("Spoke at a conference.");
        $badge->setImage("015.jpg");
        $badge->setCategory($this->getReference("cat_meetup"));
        $manager->persist($badge);




        $badge = new Badge();
        $badge->setName("1 Year Member");
        $badge->setDescription("Registered one year ago.");
        $badge->setImage("016.jpg");
        $badge->setCategory($this->getReference("cat_time"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("2 Year Member");
        $badge->setDescription("Registered two years ago.");
        $badge->setImage("017.jpg");
        $badge->setCategory($this->getReference("cat_time"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("3 Year Member");
        $badge->setDescription("Registered three years ago.");
        $badge->setImage("018.jpg");
        $badge->setCategory($this->getReference("cat_time"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("4 Year Member");
        $badge->setDescription("Registered four years ago.");
        $badge->setImage("019.jpg");
        $badge->setCategory($this->getReference("cat_time"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("5 Year Member");
        $badge->setDescription("Registered five years ago.");
        $badge->setImage("020.jpg");
        $badge->setCategory($this->getReference("cat_time"));
        $manager->persist($badge);



        $badge = new Badge();
        $badge->setName("Evangelist");
        $badge->setDescription("Given to those who are really involved in getting Saffire out there.");
        $badge->setImage("001.jpg");
        $badge->setCategory($this->getReference("cat_special"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Saffire Birthstone");
        $badge->setDescription("Born in September.");
        $badge->setImage("002.jpg");
        $badge->setCategory($this->getReference("cat_special"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Exceeded Expectations");
        $badge->setDescription("Given for those who stands out on Saffire.");
        $badge->setImage("003.jpg");
        $badge->setCategory($this->getReference("cat_special"));
        $manager->persist($badge);

        $badge = new Badge();
        $badge->setName("Blogger");
        $badge->setDescription("Blogged about Saffire.");
        $badge->setImage("005.jpg");
        $badge->setCategory($this->getReference("cat_special"));
        $manager->persist($badge);


        $manager->flush();
    }

    public function getOrder()
    {
        return 20;
    }

}