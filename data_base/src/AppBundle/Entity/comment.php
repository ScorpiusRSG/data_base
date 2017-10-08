<?php

namespace AppBundle\Entity;

/**
 * comment
 */
class comment
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var \DateTime
     */
    private $date;


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
     * Set text
     *
     * @param string $text
     *
     * @return comment
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return comment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @var \AppBundle\Entity\comment
     */
    private $comment;

    /**
     * @var \AppBundle\Entity\Autor
     */
    private $autor;

    /**
     * @var \AppBundle\Entity\post
     */
    private $post;


    /**
     * Set comment
     *
     * @param \AppBundle\Entity\comment $comment
     *
     * @return comment
     */
    public function setComment(\AppBundle\Entity\comment $comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return \AppBundle\Entity\comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set autor
     *
     * @param \AppBundle\Entity\Autor $autor
     *
     * @return comment
     */
    public function setAutor(\AppBundle\Entity\Autor $autor = null)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return \AppBundle\Entity\Autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set post
     *
     * @param \AppBundle\Entity\post $post
     *
     * @return comment
     */
    public function setPost(\AppBundle\Entity\post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \AppBundle\Entity\post
     */
    public function getPost()
    {
        return $this->post;
    }
}
