<?php

namespace Saffire\BadgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="badges")
 * @ORM\Entity(repositoryClass="Saffire\BadgeBundle\Repository\BadgeRepository")
 */
class Badge {

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
     * @ORM\ManyToOne(targetEntity="Saffire\BadgeBundle\Entity\Badge")
     */
    protected $category;



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
     * @return Badge
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
     * @return Badge
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
     * @return Badge
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
        return "<img width=$size height=$size src=/img/badges/".$this->getImage().">";
    }


    /**
     * Set dt_created
     *
     * @param \DateTime $dtCreated
     * @return Badge
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

    /**
     * Set category
     *
     * @param Saffire\BadgeBundle\Entity\Badge $category
     * @return Badge
     */
    public function setCategory(\Saffire\BadgeBundle\Entity\Badge $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return Saffire\BadgeBundle\Entity\Badge 
     */
    public function getCategory()
    {
        return $this->category;
    }
}