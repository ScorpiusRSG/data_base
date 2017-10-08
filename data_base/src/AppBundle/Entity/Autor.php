<?php

namespace AppBundle\Entity;

/**
 * Autor
 */
class Autor
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
     * @var string
     */
    private $sName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $lastLogDate;


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
     * @return Autor
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
     * Set sName
     *
     * @param string $sName
     *
     * @return Autor
     */
    public function setSName($sName)
    {
        $this->sName = $sName;

        return $this;
    }

    /**
     * Get sName
     *
     * @return string
     */
    public function getSName()
    {
        return $this->sName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Autor
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
     * Set lastLogDate
     *
     * @param \DateTime $lastLogDate
     *
     * @return Autor
     */
    public function setLastLogDate($lastLogDate)
    {
        $this->lastLogDate = $lastLogDate;

        return $this;
    }

    /**
     * Get lastLogDate
     *
     * @return \DateTime
     */
    public function getLastLogDate()
    {
        return $this->lastLogDate;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $post;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comment;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->post = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comment = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add post
     *
     * @param \AppBundle\Entity\post $post
     *
     * @return Autor
     */
    public function addPost(\AppBundle\Entity\post $post)
    {
        $this->post[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \AppBundle\Entity\post $post
     */
    public function removePost(\AppBundle\Entity\post $post)
    {
        $this->post->removeElement($post);
    }

    /**
     * Get post
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\comment $comment
     *
     * @return Autor
     */
    public function addComment(\AppBundle\Entity\comment $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \AppBundle\Entity\comment $comment
     */
    public function removeComment(\AppBundle\Entity\comment $comment)
    {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComment()
    {
        return $this->comment;
    }
}
