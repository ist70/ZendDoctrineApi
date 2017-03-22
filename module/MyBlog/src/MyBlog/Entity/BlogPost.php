<?php
/**
 * @link https://github.com/romka/zend-blog-example
 */

namespace MyBlog\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * An example of how to implement a BlogPost entity.
 *
 * @ORM\Entity
 * @ORM\Table(name="blogposts")
 *
 * @author Roman Arkharov <arkharov@gmail.com>
 */
class BlogPost
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $title;

    /**
     * @var text
     * @ORM\Column(type="text")
     */
    protected $text;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $created;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param text $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param int $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

}
