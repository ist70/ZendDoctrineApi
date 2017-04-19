<?php
//
//namespace Application\Entity;
//
//use Doctrine\ORM\Mapping as ORM;
//
///**
// * Collections
// *
// * @ORM\Table(name="collections")
// * @ORM\Entity
// */
//class Collections
//{
//    /**
//     * @var integer
//     *
//     * @ORM\Column(name="id", type="bigint", nullable=false)
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="IDENTITY")
//     */
//    private $id;
//
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="title", type="string", length=255, nullable=false)
//     */
//    private $title;
//
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
//     */
//    private $description;
//
//    /**
//     * @var \DateTime
//     *
//     * @ORM\Column(name="create_at", type="datetime", nullable=false)
//     */
//    private $createAt;
//
//    /**
//     * @return int
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * @return string
//     */
//    public function getTitle()
//    {
//        return $this->title;
//    }
//
//    /**
//     * @param string $title
//     */
//    public function setTitle($title)
//    {
//        $this->title = $title;
//    }
//
//    /**
//     * @return string
//     */
//    public function getDescription()
//    {
//        return $this->description;
//    }
//
//    /**
//     * @param string $description
//     */
//    public function setDescription($description)
//    {
//        echo 'Это вывод = '. $description . '<br>';
//        $this->description = $description;
//    }
//
//    /**
//     * @return \DateTime
//     */
//    public function getCreateAt()
//    {
//        return $this->createAt;
//    }
//
//    /**
//     * @param \DateTime $createAt
//     */
//    public function setCreateAt($createAt)
//    {
//        $this->createAt = $createAt;
//    }
//
//
//
//
//}
//
