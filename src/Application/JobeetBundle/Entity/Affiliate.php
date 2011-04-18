<?php

namespace Application\JobeetBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @orm:Entity
 * @orm:Table(name="affiliate")
 */

class Affiliate
{
  /**
   * @orm:Id
   * @orm:Column(type="integer")
   * @orm:GeneratedValue(strategy="AUTO")
   *
   * @var integer $id
   */
  protected $id;


  /**
   * @orm:Column(type="string", length="255", nullable=true, name="url")
   *
   * @var string $url
   */
  protected $url;


  /**
   * @orm:Column(type="string", length="255", unique=true, nullable=true, name="email")
   *
   * @var string $email
   */
  protected $email;


  /**
   * @orm:Column(type="string", length="255", nullable=true, name="token")
   *
   * @var string $token
   */
  protected $token;


  /**
   * @orm:Column(type="boolean", name="is_active")
   * @var boolean $is_active
   */
  protected $is_active;

  /**
   * @var Application\Jobeet2Bundle\Entity\Category
   */
  protected $categories;

  /**
   * @orm:Column(type="datetime", name="created_at")
   */
  protected $createdAt;

  /**
   * @orm:Column(type="datetime", name="updated_at")
   */
  protected $updatedAt;


  /**
   * Get id
   *
   * @return integer $id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set url
   *
   * @param string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }

  /**
   * Get url
   *
   * @return string $url
   */
  public function getUrl()
  {
    return $this->url;
  }

  /**
   * Set email
   *
   * @param string $email
   */
  public function setEmail($email)
  {
    $this->email = $email;
  }

  /**
   * Get email
   *
   * @return string $email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set token
   *
   * @param string $token
   */
  public function setToken($token)
  {
    $this->token = $token;
  }

  /**
   * Get token
   *
   * @return string $token
   */
  public function getToken()
  {
    return $this->token;
  }

  /**
   * Set is_active
   *
   * @param boolean $isActive
   */
  public function setIsActive($isActive)
  {
    $this->is_active = $isActive;
  }

  /**
   * Get is_active
   *
   * @return boolean $isActive
   */
  public function getIsActive()
  {
    return $this->is_active;
  }

  /**
   * Set createdAt
   *
   * @param datetime $createdAt
   */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }

  /**
   * Get createdAt
   *
   * @return datetime $createdAt
   */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }

  /**
   * Set updatedAt
   *
   * @param datetime $updatedAt
   */
  public function setUpdatedAt($updatedAt)
  {
    $this->updatedAt = $updatedAt;
  }

  /**
   * Get updatedAt
   *
   * @return datetime $updatedAt
   */
  public function getUpdatedAt()
  {
    return $this->updatedAt;
  }
}