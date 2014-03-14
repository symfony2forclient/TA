<?php

namespace TA\CurriculumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseToCategory
 *
 * @ORM\Table(name="course_to_category")
 * @ORM\Entity(repositoryClass="TA\CurriculumBundle\Entity\CourseToCategoryRepository")
 */
class CourseToCategory
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
    * @ORM\ManyToOne(targetEntity="Course", inversedBy="courseToCategories")
    * @ORM\JoinColumn(name="courseId", referencedColumnName="id")
    */
    private $course;
    
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="courseToCategories")
     * @ORM\JoinColumn(name="categoryId", referencedColumnName="id")
     */
    private $category;
    
    
   /**
    * @var integer
    *
    * @ORM\Column(name="ordering", type="smallint", options={"default" = 1})
    */
    private $ordering = 1;
    
    public function getId() {
        return $this->id;
    }
    
    /**
     * Get course
     * 
     * @return Cource
     */
    public function getCourse() {
        return $this->course;
    }
    
    /**
     * Set course
     * 
     * @param Course $course
     */
    public function setCourse($course) {
        $this->course = $course;
    }
    
    /**
     * Get category
     * 
     * @return Category
     */
    public function getCategory() {
        return $this->category;
    }
    
    /**
     * Set category
     * 
     * @param Category $category
     */
    public function setCategory($category) {
        $this->category = $category;
    }
    
    /**
     * Get ordering
     * 
     * @return int
     */
    public function getOrdering() {
        return $this->ordering;
    }
    
    /**
     * Set Ordering
     * 
     * @param int $ordering
     */
    public function setOrdering($ordering) {
        $this->ordering = $ordering;
    }

}