<?php

namespace Saffire\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Saffire\UserBundle\Repository\UserRepository")
 */
class User {

    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $email;


    /**
     * @ORM\Column(name="twitter", type="string", length=50, nullable=true)
     */
    protected $twitter;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dt_created;


    /**
     * @ORM\ManyToMany(targetEntity="Saffire\BadgeBundle\Entity\Badge")
     */
    protected $badges;

    /**
     * @ORM\ManyToMany(targetEntity="Saffire\GroupBundle\Entity\Group")
     */
    protected $groups;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->badges = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set first_name
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    
        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    
        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return User
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    
        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Add badges
     *
     * @param SaffireBadgeBundle\Entity\Badge $badges
     * @return User
     */
    public function addBadge(\SaffireBadgeBundle\Entity\Badge $badges)
    {
        $this->badges[] = $badges;
    
        return $this;
    }

    /**
     * Remove badges
     *
     * @param SaffireBadgeBundle\Entity\Badge $badges
     */
    public function removeBadge(\SaffireBadgeBundle\Entity\Badge $badges)
    {
        $this->badges->removeElement($badges);
    }

    /**
     * Get badges
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getBadges()
    {
        return $this->badges;
    }

    /**
     * Add groups
     *
     * @param SaffireBadgeBundle\Entity\Group $groups
     * @return User
     */
    public function addGroup(\SaffireBadgeBundle\Entity\Group $groups)
    {
        $this->groups[] = $groups;
    
        return $this;
    }

    /**
     * Remove groups
     *
     * @param SaffireBadgeBundle\Entity\Group $groups
     */
    public function removeGroup(\SaffireBadgeBundle\Entity\Group $groups)
    {
        $this->groups->removeElement($groups);
    }

    /**
     * Get groups
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }

    public function getThumbnail($size = 50) {
        //return $this->container->get('gravatar')->getUrl($this->getEmail(), $size, 'g', 'defaultimage.png', true);
    }

    public function getClass() {
        return __CLASS__;
    }


    /**
     * Set dt_created
     *
     * @param \DateTime $dtCreated
     * @return User
     */
    public function setDtCreated($dtCreated)
    {
        $this->dt_created = $dtCreated;
    
        return $this;
    }

    /**
     * Get dt_created
     *
     * @return \DateTime 
     */
    public function getDtCreated()
    {
        return $this->dt_created;
    }
}