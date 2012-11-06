<?php

namespace Saffire\GroupBundle\Repository;

use Doctrine\ORM\EntityRepository;

class GroupRepository extends EntityRepository
{
    function getLatest($limit = 10)
    {
        $qb = $this->createQueryBuilder('c')
                   ->select('c')
                   ->addOrderBy('c.dt_created', 'DESC')
                   ->setMaxResults($limit);

        return $qb->getQuery()
                  ->getResult();
    }
}