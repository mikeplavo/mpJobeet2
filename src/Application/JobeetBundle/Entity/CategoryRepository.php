<?php

namespace Application\JobeetBundle\Entity;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{

   /**
* Fetch categories with jobs in it
* @return categories
*/

    public function getWithJobs()
    {
     $qb = $this->createQueryBuilder('c')
     ->innerJoin('c.job','j');

     //TODO ActiveJobs
     return $qb->getQuery()->getResult();

    }

    /**
* Fetch jobs by categories
* @param unknown_type $category
* @return Categories
*/

    public function getActiveJobsByCategory(Category $category)
    {
     $this->getActiveJobsByCategoryQuery($category)->getResult();
    }

        /**
* NumEnter description here ...
* @param Category $category
* @return QueryBuilder
*/

    public function getActiveJobsByCategoryQuery(Category $category)
    {
     return $this->_em->getRepository('Application\JobeetBundle\Entity\Job')->getActiveJobsByCategoryQuery($category);
    }
}