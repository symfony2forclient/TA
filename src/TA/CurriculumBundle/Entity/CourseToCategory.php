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
     * @var integer
     *
     * 
     * @ORM\Column(name="courseId", type="integer")
     */
    private $courseId;
    
    /**
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="courseToCategory")
     * @ORM\JoinColumn(name="courseId", referencedColumnName="id")
 
    private $course;
     */
    
    /**
     * @var integer
     *
     * 
     * @ORM\Column(name="categoryId", type="integer")
     */
    private $categoryId;
    
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="courseToCategory")
     * @ORM\JoinColumn(name="categoryId", referencedColumnName="id")
     
    private $category;
    */
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ordering", type="smallint", options={"default" = 1})
     */
    private $ordering = 1;


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
     * Set courseId
     *
     * @param integer $courseId
     * @return CourseToCategory
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return integer 
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return CourseToCategory
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set ordering
     *
     * @param integer $ordering
     * @return CourseToCategory
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;

        return $this;
    }

    /**
     * Get ordering
     *
     * @return integer 
     */
    public function getOrdering()
    {
        return $this->ordering;
    }
}
