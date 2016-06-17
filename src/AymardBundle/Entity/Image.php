<?php

namespace AymardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AymardBundle\Entity\Page;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="AymardBundle\Repository\ImageRepository")
 */
class Image
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;


    /**
    * @var string 
    * 
    * @ORM\Column(name="file", type="string")
    * @Assert\NotBlank(message="Please, upload an JPEG/JPG or PNG image file.", groups={"registration"})
    */
    
    
    private $file;

    
    /**
    * @var Id
    * @ORM\ManyToOne(targetEntity="Page", inversedBy="photos")
    * @ORM\JoinColumn(name="page_id", referencedColumnName="id", nullable=false)
    */
    private $page;


    public function getPage(){
        return $this->page;
    }

    public function setPage(Page $page){
        $this->page = $page;

        return $this;
    }

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
     * Set description
     *
     * @param string $description
     *
     * @return Image
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set name
     *
 
    /**
     * Set file
     *
     * @param string $file
     *
     * @return Image
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    public function __toString(){
        return $this->file;
    }
}
