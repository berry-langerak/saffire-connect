<?php

namespace Saffire\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="groups")
 * @ORM\Entity(repositoryClass="Saffire\GroupBundle\Repository\GroupRepository")
 */
class Group {

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
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $image;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dt_created;

    /**
     * @ORM\ManyToMany(targetEntity="Saffire\UserBundle\Entity\User")
     */
    protected $moderators;


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
     * @return Group
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
     * Set description
     *
     * @param string $description
     * @return Group
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Group
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }


    public function getThumbnail($size = 50) {
        return "<img width=$size height=$size src=/img/groups/".$this->getImage().">";
    }

    public function getClass() {
        return __CLASS__;
    }


    /**
     * Set dt_created
     *
     * @param \DateTime $dtCreated
     * @return Group
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