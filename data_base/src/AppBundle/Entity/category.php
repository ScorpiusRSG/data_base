<?php

namespace AppBundle\Entity;

/**
 * category
 */
class category
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return category
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $postsCategory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->postsCategory = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add postsCategory
     *
     * @param \AppBundle\Entity\post $postsCategory
     *
     * @return category
     */
    public function addPostsCategory(\AppBundle\Entity\post $postsCategory)
    {
        $this->postsCategory[] = $postsCategory;

        return $this;
    }

    /**
     * Remove postsCategory
     *
     * @param \AppBundle\Entity\post $postsCategory
     */
    public function removePostsCategory(\AppBundle\Entity\post $postsCategory)
    {
        $this->postsCategory->removeElement($postsCategory);
    }

    /**
     * Get postsCategory
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPostsCategory()
    {
        return $this->postsCategory;
    }
}
