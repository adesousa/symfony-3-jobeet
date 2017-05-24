<?php

namespace AppBundle\Repository;

/**
 * JobRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class JobRepository extends \Doctrine\ORM\EntityRepository
{

	/**
	 * Total jobs available in the base
	 */
	public function countJobs()
    {
        return $this->createQueryBuilder('j')
                    ->select('COUNT(j)')
  					->getQuery()
  					->getSingleScalarResult();
    }


}
