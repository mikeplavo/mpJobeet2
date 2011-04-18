<?php


namespace Application\JobeetBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
/**
 * @orm:Entity(repositoryClass="Application\JobeetBundle\Entity\CategoryRepository")
 * @orm:Table(name="category")
 */
class Category
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
   * @orm:Column(type="string", length="255", nullable=true, name="name")
   */
  protected $name;



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
   * @orm:ManyToMany(targetEntity="Affiliate")
   * @orm:JoinTable(name="category_affiliate",
   *     joinColumns={@orm:JoinColumn(name="category_id", referencedColumnName="id")},
   *     inverseJoinColumns={@orm:JoinColumn(name="affiliate_id", referencedColumnName="id")}
   * )
   *
   * @var ArrayCollection $tags
   */
  protected $affiliates;
  /**
   * Set name
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * Get name
   *
   * @return string $name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Gets the post tags.
   *
   * @return ArrayCollection The tags
   */
  public function getAffiliates()
  {
    return $this->affiliates;
  }


}