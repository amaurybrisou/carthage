<?php

namespace AymardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Translation
 *
 * @ORM\Table(name="translation")
 * @ORM\Entity(repositoryClass="AymardBundle\Repository\TranslationRepository")
 */
class Translation
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
     * @ORM\Column(name="locale", type="string", length=2)
     */
    private $locale;
    
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var Id
    * @ORM\ManyToMany(targetEntity="Page", inversedBy="translations")
    * @ORM\JoinColumn(name="page_id", referencedColumnName="id", nullable=false)
    */
    private $pages;
    
    public function __construct($locale){
        $this->locale = $locale;
        $this->pages = new ArrayCollection();
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
     * @return Translation
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
     * Set description
     *
     * @param string $description
     *
     * @return Translation
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
     * Set locale
     *
     * @param string $locale
     *
     * @return Translation
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Add page
     *
     * @param \AymardBundle\Entity\Page $page
     *
     * @return Translation
     */
    public function addPage(\AymardBundle\Entity\Page $page)
    {
        $this->pages[] = $page;

        return $this;
    }

    /**
     * Remove page
     *
     * @param \AymardBundle\Entity\Page $page
     */
    public function removePage(\AymardBundle\Entity\Page $page)
    {
        $this->pages->removeElement($page);
    }

    /**
     * Get pages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPages()
    {
        return $this->pages;
    }
}
