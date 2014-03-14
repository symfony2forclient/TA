<?php

namespace TA\CurriculumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TA\CurriculumBundle\Entity\CourseRepository")
 */
class Course {
   
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image = null;

    /**
     * @var string
     *
     * @ORM\Column(name="promoVideo", type="string", length=100, nullable=true)
     */
    private $promoVideo = null;

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
     * @var integer
     *
     * @ORM\Column(name="visits", type="bigint", options={"default" = 0})
     */
    private $visits;

    /**
     * @var integer
     *
     * @ORM\Column(name="targetAgeFrom", type="smallint")
     */
    private $targetAgeFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="targetAgeTo", type="smallint")
     */
    private $targetAgeTo;

    /**
     * @ORM\OneToMany(targetEntity="Content", mappedBy="course")
     */
    private $contents;
    
    /**
     * @ORM\OneToMany(targetEntity="CourseToCategory", mappedBy="course")
     */
    private $courseToCategories;

   /**
    * Constructor
    */
    public function __construct() {
        $this->contents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courseToCategories = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get Id
     * 
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * Get Title
     * 
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }
    
    /**
     * set Title
     * 
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }
    
    /**
     * Get description
     * 
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }
    
    /**
     * Set description
     * 
     * @param string $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }
    
    /**
     * Get image
     * 
     * @return string
     */
    public function getImage() {
        return $this->image;
    }
    
    /**
     * Get image
     * 
     * @param string $image
     */
    public function setImage($image) {
        $this->image = $image;
    }
    
    /**
     * Get promoVideo
     * 
     * @return string
     */
    public function getPromoVideo() {
        return $this->promoVideo;
    }
    
    /**
     * Set PromoVideo
     * 
     * @param string $promoVideo
     */
    public function setPromoVideo($promoVideo) {
        $this->promoVideo = $promoVideo;
    }
    
    /**
     * get dateCreated
     * 
     * @return DateTime
     */
    public function getDateCreated() {
        return $this->dateCreated;
    }
    
    /**
     * Set DateCreated
     * 
     * @param \DateTime $dateCreated
     */
    public function setDateCreated(\DateTime $dateCreated) {
        $this->dateCreated = $dateCreated;
    }
    
    /**
     * Get dateUpdated
     * 
     * @return DateTime
     */
    public function getDateUpdated() {
        return $this->dateUpdated;
    }
    
    /**
     * Set dateUpdated
     * 
     * @param \DateTime $dateUpdated
     */
    public function setDateUpdated(\DateTime $dateUpdated) {
        $this->dateUpdated = $dateUpdated;
    }
    
    /**
     * Get visits
     * 
     * @return int
     */
    public function getVisits() {
        return $this->visits;
    }
    
    /**
     * Set visists
     * 
     * @param int $visits
     */
    public function setVisits($visits) {
        $this->visits = $visits;
    }
    
    /**
     * Get targetAgeFrom
     * 
     * @return int
     */
    public function getTargetAgeFrom() {
        return $this->targetAgeFrom;
    }
    
    /**
     * Set targetAgeFrom
     * 
     * @param int $targetAgeFrom
     */
    public function setTargetAgeFrom($targetAgeFrom) {
        $this->targetAgeFrom = $targetAgeFrom;
    }
    
    /**
     * Get targetAgeTo
     * 
     * @return int
     */
    public function getTargetAgeTo() {
        return $this->targetAgeTo;
    }
    
    /**
     * Set targetAgeTo
     * 
     * @param int $targetAgeTo
     */
    public function setTargetAgeTo($targetAgeTo) {
        $this->targetAgeTo = $targetAgeTo;
    }

    /**
     * Get content
     * 
     * @return List<Content> contents
     */
    public function getContents() {
        return $this->contents;
    }
    
    /**
     * Add contents
     * 
     * @param Content $contents
     */
    public function addContents($contents) {
        $this->contents[] = $contents;
    }
    
    /**
     * Get courceToCategoies
     * 
     * @return List<CourseToCategory>
     */
    public function getCourseToCategories() {
        return $this->courseToCategories;
    }
    
    /**
     * Add courseToCategories
     * 
     * @param CourseToCategory
     */
    public function addCourseToCategories($courseToCategories) {
        $this->courseToCategories[] = $courseToCategories;
    }
 
    public function __toString() {
        return $this->title;
    }

}