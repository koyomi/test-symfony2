<?php
// src/OC/PlatformBundle/Entity/Image

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Entity\ImageRepository")
 */
class Image
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="url", type="string", length=255)
   */
  private $url;

  /**
   * @ORM\Column(name="alt", type="string", length=255)
   */
  private $alt;

    /**
     * Get id
     *
     * @return id 
     */
    public function getId()
    {
        return $this->$id;
    }

    /**
     * set id
     *
     * @return id 
     */
    public function setId($id)
    {
        return $this->id = $id;
    }

    /**
     * Get url
     *
     * @return url 
     */
    public function getUrl()
    {
        return $this->$url;
    }

    /**
     * set url
     *
     * @return url 
     */
    public function setUrl($url)
    {
        return $this->url = $url;
    }    /**
     * Get alt
     *
     * @return alt 
     */
    public function getAlt()
    {
        return $this->$url;
    }

    /**
     * set alt
     *
     * @return alt 
     */
    public function setAlt($alt)
    {
        return $this->alt = $alt;
    }


}