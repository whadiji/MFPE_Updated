<?php

namespace Mfpe\DataSocioEconomicBundle\Repository;

/**
 * CsvSocioEconomicDataRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CsvSocioEconomicDataRepository extends \Doctrine\ORM\EntityRepository
{
    public function getDataSocioEconomicByGouvernorat($data)
    {
        $query = $this->createQueryBuilder("CsvSocioEconomicData");
        if (isset($data["code_gouvernorat"])) {
            $query->innerJoin('MfpeReferencielBundle:RefGouvernorat', 'refGouv');
            $query
                ->where('refGouv.code = :code_gouvernorat')
                ->setParameter('code_gouvernorat', $data["code_gouvernorat"]);
        }
        //dd($query->getQuery()->getSQL());
        //   dd(count($query->getQuery()->getResult()));
    }

    //get Socia economic data second period
    public function getCsvSocioEconomicDataWithPaginationP2($data)
    {
        $response = array();
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
        $emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');
        $emConfig->addCustomDatetimeFunction('DAY', 'DoctrineExtensions\Query\Mysql\Day');
        //Search pear page
        $query = $this->createQueryBuilder('CsvSocioEconomicData');
        if (isset($data["gouvernorat"]) || isset($data["governorate"])) {
            if (isset($data["gouvernorat"])) {
                $gouvernorat = $data["gouvernorat"];
            } elseif (isset($data["governorate"])) {
                $gouvernorat = $data["governorate"];
            }
            $query->innerJoin('CsvSocioEconomicData.governoratId', 'refGouv');
            $query->andWhere('refGouv.id = :gouvernorat')
                ->orWhere('CsvSocioEconomicData.codeGovernorat = :gouvernorat')
                ->orWhere('CsvSocioEconomicData.governoratId = :gouvernorat')
                ->setParameter('gouvernorat', $gouvernorat);
        }
        if (isset($data["yearSecondary"]) && !empty($data["yearSecondary"])) {
            $query->andWhere('CsvSocioEconomicData.annee = :year')
                ->setParameter('year', $data["yearSecondary"]);
        }
        $response = $query->getQuery()->getArrayResult();
        //return result
        return $response;
    }

    //get Socia economic data first period
    public function getCsvSocioEconomicDataWithPagination($data)
    {
        $response = array();
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
        $emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');
        $emConfig->addCustomDatetimeFunction('DAY', 'DoctrineExtensions\Query\Mysql\Day');
        //Search pear page
        $query = $this->createQueryBuilder('CsvSocioEconomicData');
        if (isset($data["governorate"]) || isset($data["gouvernorat"])) {

            if (isset($data["governorate"])) {
                $gouvernorat = $data["gouvernorat"];
            } elseif (isset($data["gouvernorat"])) {
                $gouvernorat = $data["gouvernorat"];

            }
            $query->innerJoin('CsvSocioEconomicData.governoratId', 'refGouv');
            $query->andWhere('refGouv.id = :gouvernorat')
                ->orWhere('CsvSocioEconomicData.codeGovernorat = :gouvernorat')
                ->orWhere('CsvSocioEconomicData.governoratId = :gouvernorat')
                ->setParameter('gouvernorat', $gouvernorat);
        }
        if (isset($data["year"]) && !empty($data["year"])) {
            $query->andWhere('CsvSocioEconomicData.annee = :year')
                ->setParameter('year', $data["year"]);
        }
        $response = $query->getQuery()->getArrayResult();
        //return result
        return $response;
    }

    //get total Socia economic data second period
    public function getTotalCsvSocioEconomicP2($data)
    {
        $response = array();
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
        $emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');
        $emConfig->addCustomDatetimeFunction('DAY', 'DoctrineExtensions\Query\Mysql\Day');
        //Search pear page
        $query = $this->createQueryBuilder('CsvSocioEconomicData')
            ->select("SUM(CsvSocioEconomicData.populationSize) as populationSizeNational",
                "SUM(CsvSocioEconomicData.populationAgeActivity) as populationAgeActivityNational",
                "SUM(CsvSocioEconomicData.activePopulation) as activePopulationNational",
                "SUM(CsvSocioEconomicData.activePopulationOccupied) as activePopulationOccupiedNational",
                "SUM(CsvSocioEconomicData.unemployedPopulation) as unemployedPopulationNational",
                "SUM(CsvSocioEconomicData.unemploymentRate) as unemploymentRateNational",
                "SUM(CsvSocioEconomicData.numberCompany) as numberCompanyNational"
            );

        if (isset($data["yearSecondary"]) && !empty($data["yearSecondary"])) {
            $query->andWhere('CsvSocioEconomicData.annee = :year')
                ->setParameter('year', $data["yearSecondary"]);
        }
        $response = $query->getQuery()->getOneOrNullResult();
        //return result
        return $response;
    }

    public function getTotalCsvSocioEconomicFunction()
    {
        $response = array();
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
        $emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');
        $emConfig->addCustomDatetimeFunction('DAY', 'DoctrineExtensions\Query\Mysql\Day');
        //Search pear page
        $query = $this->createQueryBuilder('CsvSocioEconomicData')
            ->select("SUM(CsvSocioEconomicData.populationSize) as populationSize",
                "SUM(CsvSocioEconomicData.activePopulation) as activePopulation",
                "SUM(CsvSocioEconomicData.activePopulationOccupied) as activePopulationOccupied",
                "SUM(CsvSocioEconomicData.unemployedPopulation) as unemployedPopulation",
                "SUM(CsvSocioEconomicData.unemploymentRate) as unemploymentRate"
            );
        $response = $query->getQuery()->getOneOrNullResult();
        //return result
        return $response;
    }

    public function getCsvSocioEconomicDataFunction($data)
    {
        $response = array();
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
        $emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');
        $emConfig->addCustomDatetimeFunction('DAY', 'DoctrineExtensions\Query\Mysql\Day');
        //Search pear page
        $query = $this->createQueryBuilder('CsvSocioEconomicData')
            ->select("CsvSocioEconomicData.populationSize as populationSize", "CsvSocioEconomicData.activePopulation as activePopulation",
                "CsvSocioEconomicData.activePopulationOccupied as activePopulationOccupied",
                "CsvSocioEconomicData.unemployedPopulation as unemployedPopulation",
                "CsvSocioEconomicData.unemploymentRate as unemploymentRate",
                "CsvSocioEconomicData.codeGovernorat as codeGovernorat");

        if (isset($data["gouvernorat"]) || isset($data["governorate"])) {
            if (isset($data["gouvernorat"])) {
                $gouvernorat = $data["gouvernorat"];
            } elseif (isset($data["governorate"])) {
                $gouvernorat = $data["governorate"];
            }
            $query->innerJoin('CsvSocioEconomicData.governoratId', 'refGouv');
            $query->andWhere('refGouv.id = :gouvernorat')
                ->orWhere('CsvSocioEconomicData.codeGovernorat = :gouvernorat')
                ->orWhere('CsvSocioEconomicData.governoratId = :gouvernorat')
                ->setParameter('gouvernorat', $gouvernorat);
        }
        if (isset($data["year"]) && !empty($data["year"])) {
            $query->andWhere('CsvSocioEconomicData.annee = :year')
                ->setParameter('year', $data["year"]);
        }
        $response = $query->getQuery()->getArrayResult();
        //return result
        return $response;
    }

    public function getCsvSocioEconomicData($data, $year)
    {
        $response = array();
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
        $emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');
        $emConfig->addCustomDatetimeFunction('DAY', 'DoctrineExtensions\Query\Mysql\Day');
        //Search pear page
        $query = $this->createQueryBuilder('CsvSocioEconomicData');
        if (isset($data)) {
            $query->innerJoin('CsvSocioEconomicData.governoratId', 'refGouv');
            $query->andWhere('refGouv.id = :gouvernorat')
                ->orWhere('CsvSocioEconomicData.codeGovernorat = :gouvernorat')
                ->setParameter('gouvernorat', $data);
        }
        if (isset($year["year"]) && !empty($year["year"])) {
            $query->andWhere('CsvSocioEconomicData.annee = :year')
                ->setParameter('year', $year["year"]);
        }

        $response = $query->getQuery()->getArrayResult();
        //return result
        return $response;
    }

}