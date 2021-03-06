<?php

namespace Mfpe\CollectDataBundle\Repository;

/**
 * ProjectDataCsvRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectDataCsvRepository extends \Doctrine\ORM\EntityRepository
{
    public function getProjectDataByFiltre($data)
    {
        $query = $this->createQueryBuilder('ProjectDataCsv');
        $query->leftJoin('ProjectDataCsv.governorat', 'governorat');
        $query->leftJoin('ProjectDataCsv.delegation', 'delegation');

        if (isset($data["gouvernorat"]) && !empty($data["gouvernorat"])) {
            $governorat= trim ($data["gouvernorat"]);
            $query
                ->andWhere('governorat.code = :gouvernate')
                ->orWhere('governorat.id = :gouvernate')
                ->setParameter('gouvernate', $governorat);

        }
        if (isset($data["delegation"]) && !empty($data["delegation"])) {
            $delegation= trim ($data["delegation"]);
            $query
                ->andWhere('delegation.id = :delegation')
                ->setParameter('delegation', $delegation);

        }

        $query->orderBy('ProjectDataCsv.updatedAt', "DESC");
        return $query->getQuery()->getResult();
    }

    public function findProjectDataByFiltre($data)
    {
        $query = $this->createQueryBuilder('ProjectDataCsv');
        $query->select('ProjectDataCsv,delegation,gouvernorat,sector');
        $query->leftJoin('ProjectDataCsv.delegation', 'delegation');
        $query->leftJoin('ProjectDataCsv.governorat', 'gouvernorat');
        $query->leftJoin('ProjectDataCsv.sector', 'sector');
        if (isset($data["gouvernorat"]) && !empty($data["gouvernorat"])) {

            $governorat = trim($data["gouvernorat"]);
            $query
                ->andwhere('gouvernorat.code = :gouvernate')
                ->setParameter('gouvernate', $governorat);
        }

        if (isset($data["annee"]) && !empty($data["annee"])) {

            $query->andWhere('YEAR(ProjectDataCsv.createdAt) = :year')
                ->setParameter('year', $data["annee"]);
        }
        return $query->getQuery()->getArrayResult();
    }
}
