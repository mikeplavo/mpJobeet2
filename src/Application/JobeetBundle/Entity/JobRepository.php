<?php

namespace Application\JobeetBundle\Entity;

use Doctrine\ORM\EntityRepository;

class JobRepository extends EntityRepository
{
  public function getActiveJobs()
  {
    $date = new \DateTime('now');
    $query = $this->getEntityManager()->createQuery('SELECT j FROM Application\JobeetBundle\Entity\Job j
            WHERE j.expiresAt > ?1 ORDER BY j.expiresAt DESC');

    $query->setParameter(1, $date->format('Y-m-d H:i:s'));
    return $jobs = $query->getResult();
  }

  public function getActiveJobsByCategoryQuery(Category $category)
    {
     $qb = $this->createQueryBuilder('j')
     ->innerJoin('j.category','c','WITH','c = :category')
     ->setParameter('category', $category);

     return $this->addActiveJobsQuery($qb);
    }

    /**
* Build query for active jobs
* @param QueryBuilder $qb
* @return QueryBuilder
*/

    public function addActiveJobsQuery(QueryBuilder $qb = null)
    {
     if ($qb === null)
     {
     $qb = $this->createQueryBuilder('j')
     ->select('j');
     }
     
     $date = new \DateTime('now');

     $qb->andWhere('j.expires_at > :date')
     ->addOrderBy('j.created_at', 'DESC')
     ->setParameter('date', $date->format('Y-m-d'));

     return $qb->getQuery();
    } 

}