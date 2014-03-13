<?php

namespace TA\CurriculumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TA\CurriculumBundle\Entity\CategoryRepository")
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", length=1, options={"default" = 0})
     */
    private $status = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordering", type="smallint", options={"default" = 1})
     */
    private $ordering = 1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpdated", type="datetime")
     */
    private $dateUpdated;
    
   
   /**
    * @ORM\ManyToOne(targetEntity="Category")    
    * @ORM\JoinColumn(name="parentId", referencedColumnName="id") 
    */  
    private $parent;
    
   /**
    * @ORM\OneToMany(targetEntity="CourseToCategory", mappedBy="category", cascade={"persist"}, orphanRemoval=TRUE)
    */    
    private $courseToCategories;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getOrdering() {
        return $this->ordering;
    }

    public function setOrdering($ordering) {
        $this->ordering = $ordering;
    }

    public function getDateCreated() {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTime $dateCreated) {
        $this->dateCreated = $dateCreated;
    }

    public function getDateUpdated() {
        return $this->dateUpdated;
    }

    public function setDateUpdated(\DateTime $dateUpdated) {
        $this->dateUpdated = $dateUpdated;
    }

    public function getParent() {
        return $this->parent;
    }

    public function setParent($parent) {
        $this->parent = $parent;
    }

    public function getCourseToCategories() {
        return $this->courseToCategories;
    }

    public function addCourseToCategories($courseToCategories) {
        $this->courseToCategories[] = $courseToCategories;
    }

    public function __toString() { return $this->name; }
}