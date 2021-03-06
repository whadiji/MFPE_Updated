<?php

namespace Mfpe\DataSocioEconomicBundle\Repository;

/**
 * ProjectInvestmentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectInvestmentRepository extends \Doctrine\ORM\EntityRepository {

    public function getProjectInvestmentByType($data) {
        $query = $this->createQueryBuilder('ProjectInvestment');
        if (isset($data["type"])) {
            $query->orwhere('ProjectInvestment.type = :type')
                    ->setParameter('type', $data["type"]);
        }
        return $query->getQuery()->getResult();
    }

}
