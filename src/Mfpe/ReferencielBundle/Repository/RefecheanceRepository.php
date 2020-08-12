<?php

namespace Mfpe\ReferencielBundle\Repository;

/**
 * RefecheanceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RefecheanceRepository extends \Doctrine\ORM\EntityRepository
{
    public function getecheancebydate($date)
    {

        return $this->createQueryBuilder('e')
            ->Join('e.previsions', 'prev')
            ->where("prev.datePrevision = :date")
            ->setParameter('date',$date)
            ->getQuery()
            ->getResult();
}



}
