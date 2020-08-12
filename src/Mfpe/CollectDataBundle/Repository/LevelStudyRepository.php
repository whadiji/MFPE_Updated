<?php

namespace Mfpe\CollectDataBundle\Repository;

/**
 * LevelStudyRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LevelStudyRepository extends \Doctrine\ORM\EntityRepository
{
    public function getNbRegistredPublic($data)
    {
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
        $listLevel = [1, 2];
        $query = $this->createQueryBuilder('LevelStudy')
            ->select('SUM(LevelStudy.nbrTotal) as nbRegistredPublic');
        $query->leftJoin('LevelStudy.statGraduateTraining', 'statGraduateTraining');
        $query->leftJoin('statGraduateTraining.trainingCenter', 'trainingCenter');
        $query->where('LevelStudy.level IN (:listLevel)')
            ->setParameter('listLevel', $listLevel);
        if (isset($data["gouvernorat"])) {

            $query->leftJoin('trainingCenter.gouvernorat', 'gouvernorat');
            $query
                ->andWhere('gouvernorat.code = :gouvernate')
                ->andWhere('UPPER(statGraduateTraining.sectorType) LIKE :sector')
                ->setParameter('gouvernate', $data["gouvernorat"])
                ->setParameter('sector', "TRUE")
                ->orderBy('statGraduateTraining.updatedAt', "DESC");
        }

        if (isset($data["annee"]) && !empty($data["annee"])) {

            $year = trim(intval($data["annee"]));

            $query
                ->andwhere('statGraduateTraining.administrativeYear = :year')
                ->setParameter('year', $year);
        }


        return $query->getQuery()->getOneOrNullResult();
    }


    //return all Nb Registred Public NiveauEtude
    public function getNbRegistredNiveauEtude($data, $niveau, $type)
    {
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
        $listLevel = [1, 2];
        $query = $this->createQueryBuilder('LevelStudy')
            ->select('SUM(LevelStudy.nbrTotal) as nbRegistred');
        $query->leftJoin('LevelStudy.statGraduateTraining', 'statGraduateTraining');
        $query->leftJoin('statGraduateTraining.trainingCenter', 'trainingCenter');
        $query->where('LevelStudy.level IN (:listLevel)')
            ->setParameter('listLevel', $listLevel);


        if (isset($niveau) && !empty($niveau)) {
            $query->leftJoin('statGraduateTraining.speciality', 'speciality');
            $query->leftJoin('speciality.niveauDiplome', 'niveauDiplome');
            $query->andWhere('niveauDiplome.id =:idDiplome')
                ->setParameter('idDiplome', $niveau);
        }

        if (isset($data["gouvernorat"])) {
            $query->leftJoin('trainingCenter.gouvernorat', 'gouvernorat');
            $query
                ->andWhere('gouvernorat.code = :gouvernate')
                ->andWhere('UPPER(statGraduateTraining.sectorType) LIKE :secteur')
                ->setParameter('gouvernate', $data["gouvernorat"])
                ->setParameter('secteur', $type)
                ->orderBy('statGraduateTraining.updatedAt', "DESC");
        }

        if (isset($data["annee"]) && !empty($data["annee"])) {
            $year = trim(intval($data["annee"]));
            $query
                ->andwhere('statGraduateTraining.administrativeYear = :year')
                ->setParameter('year', $year);
        }

        //      dd($query->getQuery()->getResult());
        return $query->getQuery()->getOneOrNullResult();
    }

    public function getDiplomedNiveauEtude($data, $niveau, $type)
    {
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
        $listLevel = [0];
        $query = $this->createQueryBuilder('LevelStudy')
            ->select('SUM(LevelStudy.nbrTotal) as nbDiplomed');
        $query->leftJoin('LevelStudy.statGraduateTraining', 'statGraduateTraining');
        $query->leftJoin('statGraduateTraining.trainingCenter', 'trainingCenter');
        $query->where('LevelStudy.level IN (:listLevel)')
            ->setParameter('listLevel', $listLevel);


        if (isset($niveau) && !empty($niveau)) {
            $query->leftJoin('statGraduateTraining.speciality', 'speciality');
            $query->leftJoin('speciality.niveauDiplome', 'niveauDiplome');
            $query->andWhere('niveauDiplome.id =:idDiplome')
                ->setParameter('idDiplome', $niveau);
        }

        if (isset($data["gouvernorat"])) {
            $query->leftJoin('trainingCenter.gouvernorat', 'gouvernorat');
            $query
                ->andWhere('gouvernorat.code = :gouvernate')
                ->andWhere('UPPER(statGraduateTraining.sectorType) LIKE :secteur')
                ->setParameter('gouvernate', $data["gouvernorat"])
                ->setParameter('secteur', $type)
                ->orderBy('statGraduateTraining.updatedAt', "DESC");
        }

        if (isset($data["annee"]) && !empty($data["annee"])) {
            $year = trim(intval($data["annee"]));
            $query
                ->andwhere('statGraduateTraining.administrativeYear = :year')
                ->setParameter('year', $year);
        }

        //      dd($query->getQuery()->getResult());
        return $query->getQuery()->getOneOrNullResult();
    }

    public function getNbRegistredPrivate($data)
    {
        $listLevel = [1, 2];
        $query = $this->createQueryBuilder('LevelStudy')
            ->select('SUM(LevelStudy.nbrTotal) as nbRegistredPrivate');
        $query->leftJoin('LevelStudy.statGraduateTraining', 'statGraduateTraining');
        $query->leftJoin('statGraduateTraining.trainingCenter', 'trainingCenter');
        if (isset($data["gouvernorat"])) {

            $query->leftJoin('trainingCenter.gouvernorat', 'gouvernorat');
            $query
                ->where('gouvernorat.code = :gouvernate')
                ->andWhere('UPPER(statGraduateTraining.sectorType) LIKE :sector')
                ->setParameter('gouvernate', $data["gouvernorat"])
                ->setParameter('sector', "FALSE")
                ->orderBy('statGraduateTraining.updatedAt', "DESC");
        }
        if (isset($data["annee"]) && !empty($data["annee"])) {
            $year = trim(intval($data["annee"]));
            $query
                ->andwhere('statGraduateTraining.administrativeYear = :year')
                ->setParameter('year', $year);
        }

        $query->andWhere('LevelStudy.level IN (:listLevel)')
            ->setParameter('listLevel', $listLevel);
        return $query->getQuery()->getOneOrNullResult();
    }

    public function getNbDiplomedPrivate($data)
    {
        $listLevel = [0];
        $query = $this->createQueryBuilder('LevelStudy')
            ->select('SUM(LevelStudy.nbrTotal) as nbDiplomedPrivate');
        $query->leftJoin('LevelStudy.statGraduateTraining', 'statGraduateTraining');
        $query->leftJoin('statGraduateTraining.trainingCenter', 'trainingCenter');
        if (isset($data["gouvernorat"])) {
            $query->leftJoin('trainingCenter.gouvernorat', 'gouvernorat');
            $query
                ->where('gouvernorat.code = :gouvernate')
                ->andWhere('UPPER(statGraduateTraining.sectorType) LIKE :sector')
                ->setParameter('gouvernate', $data["gouvernorat"])
                ->setParameter('sector', "FALSE")
                ->orderBy('statGraduateTraining.updatedAt', "DESC");
        }
        if (isset($data["annee"]) && !empty($data["annee"])) {
            $year = trim(intval($data["annee"]));

            $query
                ->andwhere('statGraduateTraining.administrativeYear = :year')
                ->setParameter('year', $year);
        }
        $query->andWhere('LevelStudy.level IN (:listLevel)')
            ->setParameter('listLevel', $listLevel);
        return $query->getQuery()->getOneOrNullResult();
    }

    public function getNbDiplomedPublic($data)
    {
        $listLevel = [0];
        $query = $this->createQueryBuilder('LevelStudy')
            ->select('SUM(LevelStudy.nbrTotal) as nbDiplomedPublic');
        $query->leftJoin('LevelStudy.statGraduateTraining', 'statGraduateTraining');
        $query->leftJoin('statGraduateTraining.trainingCenter', 'trainingCenter');
        if (isset($data["gouvernorat"])) {
            $query->leftJoin('trainingCenter.gouvernorat', 'gouvernorat');
            $query
                ->where('gouvernorat.code = :gouvernate')
                ->andWhere('UPPER(statGraduateTraining.sectorType) LIKE :sector')
                ->setParameter('gouvernate', $data["gouvernorat"])
                ->setParameter('sector', "TRUE")
                ->orderBy('statGraduateTraining.updatedAt', "DESC");
        }
        if (isset($data["annee"]) && !empty($data["annee"])) {
            $year = trim(intval($data["annee"]));

            $query
                ->andwhere('statGraduateTraining.administrativeYear = :year')
                ->setParameter('year', $year);
        }

        $query->andWhere('LevelStudy.level IN (:listLevel)')
            ->setParameter('listLevel', $listLevel);
        return $query->getQuery()->getOneOrNullResult();
    }

//    public function getStatFormation($data, $sector,$level)
//    {
//        //select
//        $query = $this->createQueryBuilder('LevelStudy')
//            ->select("LevelStudy,trainingCenter.id as IdCenter,trainingCenter.intituleFr as centreFr,trainingCenter.intituleAr as centreAr,
//            speciality.intituleFr as specialitFr,trainingCenter.intituleAr as specialitAr,
//           SUM(LevelStudy.nbrTotal) as total ,gouvernorat");
//        $query->leftJoin('LevelStudy.statGraduateTraining', 'statGraduateTraining');
//        $query->leftJoin('statGraduateTraining.trainingCenter', 'trainingCenter');
//        $query->leftJoin('statGraduateTraining.speciality', 'speciality');
//        $query->leftJoin('trainingCenter.gouvernorat', 'gouvernorat');
//
//        $query->where("statGraduateTraining.sectorType = :sector");
//        $query->setParameter('sector', $sector);
//        $query->groupBy('trainingCenter');
//        if (isset($data["governorate"] )&& !empty($data["governorate"])) {
//            $governorat= trim ($data["governorate"]);
//
//            $query
//                ->andwhere('gouvernorat.id = :gouvernate')
//                ->setParameter('gouvernate', $governorat);
//
//        }
//        if (isset($data["annee"]) && !empty($data["annee"])) {
//
//            $year= trim ($data["annee"]);
//            $query
//                ->andwhere('statGraduateTraining.administrativeYear = :year')
//                ->setParameter('year',  $year);
//        }
//        $query
//            ->andwhere('LevelStudy.level = :level')
//            ->setParameter('level',  $level);
//        $response = $query->getQuery()->getArrayResult();
//
//        return $response[0];
//    }


}