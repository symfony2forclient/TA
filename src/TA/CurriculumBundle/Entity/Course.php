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
     * @ORM\OneToMany(targetEntity="Content", mappedBy="Course")
     */
    private $contents;
    
    /**
     * @ORM\OneToMany(targetEntity="CourseToCategory", mappedBy="course")
     */
    private $courseToCategory;
    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Course
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Course
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
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
     * Set image
     *
     * @param string $image
     * @return Course
     */
    public function setImage($image) {
        $this->image = $image;

        return $this;
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
     * Set promoVideo
     *
     * @param string $promoVideo
     * @return Course
     */
    public function setPromoVideo($promoVideo) {
        $this->promoVideo = $promoVideo;

        return $this;
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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Course
     */
    public function setDateCreated($dateCreated) {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated() {
        return $this->dateCreated;
    }

    /**
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     * @return Course
     */
    public function setDateUpdated($dateUpdated) {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \DateTime
     */
    public function getDateUpdated() {
        return $this->dateUpdated;
    }

    /**
     * Set visits
     *
     * @param integer $visits
     * @return Course
     */
    public function setVisits($visits) {
        $this->visits = $visits;

        return $this;
    }

    /**
     * Get visits
     *
     * @return integer
     */
    public function getVisits() {
        return $this->visits;
    }

    /**
     * Set visitsUnique
     *
     * @param integer $visitsUnique
     * @return Course
     */
    public function setVisitsUnique($visitsUnique) {
        $this->visitsUnique = $visitsUnique;

        return $this;
    }

    /**
     * Get visitsUnique
     *
     * @return integer
     */
    public function getVisitsUnique() {
        return $this->visitsUnique;
    }

    /**
     * Set targetAgeFrom
     *
     * @param integer $targetAgeFrom
     * @return Course
     */
    public function setTargetAgeFrom($targetAgeFrom) {
        $this->targetAgeFrom = $targetAgeFrom;

        return $this;
    }

    /**
     * Get targetAgeFrom
     *
     * @return integer
     */
    public function getTargetAgeFrom() {
        return $this->targetAgeFrom;
    }

    /**
     * Set targetAgeTo
     *
     * @param integer $targetAgeTo
     * @return Course
     */
    public function setTargetAgeTo($targetAgeTo) {
        $this->targetAgeTo = $targetAgeTo;

        return $this;
    }

    /**
     * Get targetAgeTo
     *
     * @return integer
     */
    public function getTargetAgeTo() {
        return $this->targetAgeTo;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->contents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contents
     *
     * @param \TA\CurriculumBundle\Entity\Content $contents
     * @return Course
     */
    public function addContent(\TA\CurriculumBundle\Entity\Content $contents) {
        $this->contents[] = $contents;

        return $this;
    }

    /**
     * Remove contents
     *
     * @param \TA\CurriculumBundle\Entity\Content $contents
     */
    public function removeContent(\TA\CurriculumBundle\Entity\Content $contents) {
        $this->contents->removeElement($contents);
    }

    /**
     * Get contents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContents() {
        return $this->contents;
    }

    public function __toString() {
        return $this->title;
    }

}
