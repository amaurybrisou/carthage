<?php

namespace AymardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AymardBundle\Entity\Image;

/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity(repositoryClass="AymardBundle\Repository\PageRepository")
 */
class Page
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
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;


    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="string", length=255, nullable=true)
     */
    private $meta_description;
    
    /**
     * @var string
     *
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=true)
     */
    private $meta_title;
    
    /**
     * @var string
     *
     * @ORM\Column(name="meta_site_name", type="string", length=255, nullable=true)
     */
    private $meta_site_name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="meta_content", type="string", length=255, nullable=true)
     */
    private $meta_content;

    
    /**
     * @var string
     *
     * @ORM\Column(name="meta_url", type="string", length=255, nullable=true)
     */
    private $meta_url;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="meta_image", type="string", length=255, nullable=true)
     */
    private $meta_image;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_keywords", type="string", length=255, nullable=true)
     */
    private $meta_keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=512, nullable=true)
     */
    private $description;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="Image", mappedBy="page")
     */
    private $photos;

    public function __construct(){
        $this->photos = new ArrayCollection();
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
     * Set title
     *
     * @param string $title
     *
     * @return Page
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }





    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return Page
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Page
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
     * Set photos
     *
     * @param array $photos
     *
     * @return Page
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
       
        return $this;
    }

    /**
     * Get photos
     *
     * @return array
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Add photo
     *
     * @param \AymardBundle\Entity\Image $photo
     *
     * @return Page
     */
    public function addPhoto(Image $photo)
    {
        $this->photos[] = $photo;
       
        return $this;
    }

    /**
     * Remove photo
     *
     * @param \AymardBundle\Entity\Image $photo
     */
    public function removePhoto(Image $photo)
    {
        $this->photos->removeElement($photo);
    }

    public function __toString(){
        return $this->title;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return Page
     */
    public function setMetaDescription($metaDescription)
    {
        $this->meta_description = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->meta_description;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return Page
     */
    public function setMetaTitle($metaTitle)
    {
        $this->meta_title = $metaTitle;

        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->meta_title;
    }

    /**
     * Set metaSiteName
     *
     * @param string $metaSiteName
     *
     * @return Page
     */
    public function setMetaSiteName($metaSiteName)
    {
        $this->meta_site_name = $metaSiteName;

        return $this;
    }

    /**
     * Get metaSiteName
     *
     * @return string
     */
    public function getMetaSiteName()
    {
        return $this->meta_site_name;
    }

    /**
     * Set metaContent
     *
     * @param string $metaContent
     *
     * @return Page
     */
    public function setMetaContent($metaContent)
    {
        $this->meta_content = $metaContent;

        return $this;
    }

    /**
     * Get metaContent
     *
     * @return string
     */
    public function getMetaContent()
    {
        return $this->meta_content;
    }

    /**
     * Set metaUrl
     *
     * @param string $metaUrl
     *
     * @return Page
     */
    public function setMetaUrl($metaUrl)
    {
        $this->meta_url = $metaUrl;

        return $this;
    }

    /**
     * Get metaUrl
     *
     * @return string
     */
    public function getMetaUrl()
    {
        return $this->meta_url;
    }

    /**
     * Set metaImage
     *
     * @param string $metaImage
     *
     * @return Page
     */
    public function setMetaImage($metaImage)
    {
        $this->meta_image = $metaImage;

        return $this;
    }

    /**
     * Get metaImage
     *
     * @return string
     */
    public function getMetaImage()
    {
        return $this->meta_image;
    }

    /**
     * Set metaKeywords
     *
     * @param string $metaKeywords
     *
     * @return Page
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->meta_keywords = $metaKeywords;

        return $this;
    }

    /**
     * Get metaKeywords
     *
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->meta_keywords;
    }
}
