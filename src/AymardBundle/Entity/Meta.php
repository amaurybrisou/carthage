<?php

namespace AymardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AymardBundle\Entity\Page;

/**
 * Meta
 *
 * @ORM\Table(name="meta")
 * @ORM\Entity(repositoryClass="AymardBundle\Repository\MetaRepository")
 */
class Meta
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
     * @ORM\Column(name="property", type="string", length=255, nullable=false)
     */
    private $property;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255, nullable=false)
     */
    private $content;
    
    /**
    * @var Id
    * @ORM\ManyToOne(targetEntity="Page", inversedBy="photos")
    * @ORM\JoinColumn(name="page_id", referencedColumnName="id", nullable=false)
    */
    private $page;

   
   public function jsonSerialize(){
       return array('file' => $this->file, 'description'=> $this->description);
   }

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
     * Set property
     *
     * @param string $property
     *
     * @return Meta
     */
    public function setProperty($property)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * Get property
     *
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Meta
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set page
     *
     * @param \AymardBundle\Entity\Page $page
     *
     * @return Meta
     */
    public function setPage(\AymardBundle\Entity\Page $page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return \AymardBundle\Entity\Page
     */
    public function getPage()
    {
        return $this->page;
    }
    
    public function addPage(Page $page)
    {
        if (!$this->meta->contains($page)) {
            $this->meta->add($page);
        }
        return $this;
    }
}
