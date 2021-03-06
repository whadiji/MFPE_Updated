<?php


namespace Mfpe\CollectDataBundle\Repository;
/**
 * PrivateTrainnigCenterRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PrivateTrainnigCenterRepository extends \Doctrine\ORM\EntityRepository
{
    public function getNumberPrivateTrainigCenterByGouvernorat($data)
    {
        $query = $this->createQueryBuilder('PrivateTrainnigCenter');
        $query->leftJoin('PrivateTrainnigCenter.governorat', 'governorat');

        if (isset($data["gouvernorat"])) {
            $query
                ->orwhere('governorat.code = :gouvernate')
                ->setParameter('gouvernate', $data["gouvernorat"])
                ->orderBy('PrivateTrainnigCenter.updatedAt', "DESC");
        }
        return $query->getQuery()->getResult();
    }

    public function getNumberPrivateTrainigCenterByFiltre($data)
    {
        $query = $this->createQueryBuilder('PrivateTrainnigCenter');
        $query->select("PrivateTrainnigCenter,gouvernorat");
        $query->leftJoin('PrivateTrainnigCenter.governorat', 'gouvernorat');

        if (isset($data["governorate"])) {
            $governorat = trim(($data["governorate"]));
            $query
                ->orWhere('gouvernorat.id = :gouvernate')
                ->orWhere('gouvernorat.code = :gouvernat')
                ->setParameter('gouvernate', $governorat)
                ->setParameter('gouvernat', $governorat)
                ->orderBy('PrivateTrainnigCenter.updatedAt', "DESC");
        }
//        if (isset($data["year"]) && !empty($data["year"])) {
//            $year = trim($data["annee"]);
//            $query
//                ->andwhere('PrivateTrainnigCenter.year = :year')
//                ->setParameter('year', $year);
//        }
//        if (isset($data["month"]) && !empty($data["month"])) {
//            $month = trim($data["month"]);
//            $query
//                ->andwhere('PrivateTrainnigCenter.month = :month')
//                ->setParameter('month', $month);
//        }

        if (isset($data["from"]) && !empty($data["from"]) && isset($data["to"]) && !empty($data["to"])) {
            $du = date("Y-m-d H:i:s", strtotime($data["from"]));
            $au = date("Y-m-d H:i:s", strtotime($data["to"]));
            $query->andWhere('PrivateTrainnigCenter.datePrivateTrainingCenter BETWEEN :du AND :au')
                ->setParameter('du', $du)
                ->setParameter('au', $au);
        }
        return $query->getQuery()->getArrayResult();
    }
    public function getNumberTotalPrivateTrainigCenterSecondaryByFiltre($data)
    {
        $query = $this->createQueryBuilder('PrivateTrainnigCenter');
        $query->select("SUM(PrivateTrainnigCenter.initialNumber) as initialNumberNational,SUM(PrivateTrainnigCenter.continusNumber) as continusNumberNational ,
        SUM(PrivateTrainnigCenter.initialContiusNumber) as initialContiusNumberNational,SUM(PrivateTrainnigCenter.changeNumber) as changeNumberNational,
        SUM(PrivateTrainnigCenter.closedTrainingCenterNumber) as closedTrainingCenterNumberNational");
        $query->leftJoin('PrivateTrainnigCenter.governorat', 'governorat');
       // $query->groupBy('governorat');
//        if (isset($data["governorate"])) {
//            $governorat = trim($data["governorate"]);
//            $query
//                ->orwhere('governorat.id = :gouvernate')
//                ->setParameter('gouvernate', $governorat)
//                ->orderBy('PrivateTrainnigCenter.updatedAt', "DESC");
//        }

        if (isset($data["fromSecondary"]) && !empty($data["fromSecondary"]) && isset($data["toSecondary"]) && !empty($data["toSecondary"])) {
            $duSecondary = date("Y-m-d H:i:s", strtotime($data["fromSecondary"]));
            $auSecondary = date("Y-m-d H:i:s", strtotime($data["toSecondary"]));
            $query->andWhere('PrivateTrainnigCenter.datePrivateTrainingCenter BETWEEN :du AND :au')
                ->setParameter('du', $duSecondary)
                ->setParameter('au', $auSecondary);
        }
        return $query->getQuery()->getArrayResult();
    }
    public function getNumberPrivateTrainigCenterSecondaryByFiltre($data)
    {
        $query = $this->createQueryBuilder('PrivateTrainnigCenter');
        $query->select("PrivateTrainnigCenter,gouvernorat");
        $query->leftJoin('PrivateTrainnigCenter.governorat', 'gouvernorat');

        if (isset($data["governorate"])) {
            $governorat = trim($data["governorate"]);
            $query
                ->orWhere('gouvernorat.id = :gouvernate')
                ->orWhere('gouvernorat.code = :gouvernat')
                ->setParameter('gouvernate', $governorat)
                ->setParameter('gouvernat', $governorat)


                ->orderBy('PrivateTrainnigCenter.updatedAt', "DESC");
        }
//        if (isset($data["year"]) && !empty($data["year"])) {
//            $year = trim($data["annee"]);
//            $query
//                ->andwhere('PrivateTrainnigCenter.year = :year')
//                ->setParameter('year', $year);
//        }
//        if (isset($data["month"]) && !empty($data["month"])) {
//            $month = trim($data["month"]);
//            $query
//                ->andwhere('PrivateTrainnigCenter.month = :month')
//                ->setParameter('month', $month);
//        }

        if (isset($data["fromSecondary"]) && !empty($data["fromSecondary"]) && isset($data["toSecondary"]) && !empty($data["toSecondary"])) {
            $duSecondary = date("Y-m-d H:i:s", strtotime($data["fromSecondary"]));
            $auSecondary = date("Y-m-d H:i:s", strtotime($data["toSecondary"]));

            $query->andWhere('PrivateTrainnigCenter.datePrivateTrainingCenter BETWEEN :du AND :au')
                ->setParameter('du', $duSecondary)
                ->setParameter('au', $auSecondary);
        }
        return $query->getQuery()->getArrayResult();
    }

    public function getPrivateTrainigCenterByFiltre($data)
    {
        $query = $this->createQueryBuilder('PrivateTrainnigCenter');
        $query->select("PrivateTrainnigCenter,governorat");
        $query->leftJoin('PrivateTrainnigCenter.governorat', 'governorat');

        if (isset($data["gouvernorat"]) && !empty($data["gouvernorat"])) {

            $governorat = trim($data["gouvernorat"]);
            $query
                ->orwhere('governorat.code = :gouvernate')
                ->setParameter('gouvernate', $governorat);
        }
        if (isset($data["annee"]) && !empty($data["annee"])) {
            $year = trim($data["annee"]);
            $query
                ->andwhere('PrivateTrainnigCenter.year > :year');
            $query
                ->orWhere('PrivateTrainnigCenter.year = :year')
                ->setParameter('year', $year);
        }

        return $query->getQuery()->getArrayResult();
    }

}