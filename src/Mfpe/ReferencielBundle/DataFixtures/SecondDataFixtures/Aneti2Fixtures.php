<?php

namespace Mfpe\ReferencielBundle\DataFixtures\SecondDataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
//Entity

use Mfpe\CollectDataBundle\Entity\AnetiTable2;


class Aneti2Fixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {

        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Tunis"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Bab-El-Bhar"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Transport"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2015");
        $aneti2->setMois("1");
        $aneti2->setDateAneti(new \DateTime("01-01-2015"));
        $aneti2->setIdGouvernorat("11");
        $aneti2->setLibGouvernorat("Tunis");
        $aneti2->setIdDelegation("1151");
        $aneti2->setLibDelegation("Bab-El-Bhar");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("11");
        $aneti2->setLibSector("Transport");
        $aneti2->setTaille("0");
        $aneti2->setLibTaille("MOINS de 10");
        $aneti2->setNombre("6");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);


        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Tunis"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Carthage"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Agroalimentaire"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2016");
        $aneti2->setMois("12");
        $aneti2->setDateAneti(new \DateTime("28-12-2016"));
        $aneti2->setIdGouvernorat("11");
        $aneti2->setLibGouvernorat("Tunis");
        $aneti2->setIdDelegation("1152");
        $aneti2->setLibDelegation("Carthage");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("12");
        $aneti2->setLibSector("Agroalimentaire");
        $aneti2->setTaille("1");
        $aneti2->setLibTaille("10 ET PLUS");
        $aneti2->setNombre("26");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);


        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Tunis"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Bab-El-Bhar"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Transport"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2017");
        $aneti2->setMois("5");
        $aneti2->setDateAneti(new \DateTime("30-05-2017"));
        $aneti2->setIdGouvernorat("11");
        $aneti2->setLibGouvernorat("Tunis");
        $aneti2->setIdDelegation("1151");
        $aneti2->setLibDelegation("Bab-El-Bhar");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("11");
        $aneti2->setLibSector("Transport");
        $aneti2->setTaille("0");
        $aneti2->setLibTaille("MOINS de 10");
        $aneti2->setNombre("16");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Tunis"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Carthage"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Agroalimentaire"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2017");
        $aneti2->setMois("8");
        $aneti2->setDateAneti(new \DateTime("13-08-2017"));
        $aneti2->setIdGouvernorat("11");
        $aneti2->setLibGouvernorat("Tunis");
        $aneti2->setIdDelegation("1152");
        $aneti2->setLibDelegation("Carthage");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("12");
        $aneti2->setLibSector("Agroalimentaire");
        $aneti2->setTaille("1");
        $aneti2->setLibTaille("10 ET PLUS");
        $aneti2->setNombre("7");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Tunis"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Bab-El-Bhar"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Transport"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2019");
        $aneti2->setMois("06");
        $aneti2->setDateAneti(new \DateTime("02-06-2019"));
        $aneti2->setIdGouvernorat("11");
        $aneti2->setLibGouvernorat("Tunis");
        $aneti2->setIdDelegation("1151");
        $aneti2->setLibDelegation("Bab-El-Bhar");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("11");
        $aneti2->setLibSector("Transport");
        $aneti2->setTaille("0");
        $aneti2->setLibTaille("MOINS de 10");
        $aneti2->setNombre("20");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        //Kasserine
        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Kasserine"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Kasserine Nord"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Agroalimentaire"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2019");
        $aneti2->setMois("11");
        $aneti2->setDateAneti(new \DateTime("11-11-2019"));
        $aneti2->setIdGouvernorat("12");
        $aneti2->setLibGouvernorat("Kasserine");
        $aneti2->setIdDelegation("1154");
        $aneti2->setLibDelegation("Kasserine Nord");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("12");
        $aneti2->setLibSector("Agroalimentaire");
        $aneti2->setTaille("1");
        $aneti2->setLibTaille("10 ET PLUS");
        $aneti2->setNombre("8");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Kasserine"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Foussana"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Transport"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2019");
        $aneti2->setMois("12");
        $aneti2->setDateAneti(new \DateTime("08-12-2019"));
        $aneti2->setIdGouvernorat("12");
        $aneti2->setLibGouvernorat("Kasserine");
        $aneti2->setIdDelegation("1153");
        $aneti2->setLibDelegation("Foussana");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("11");
        $aneti2->setLibSector("Transport");
        $aneti2->setTaille("0");
        $aneti2->setLibTaille("MOINS de 10");
        $aneti2->setNombre("6");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);


        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Kasserine"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Sbiba"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Agroalimentaire"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2018");
        $aneti2->setMois("1");
        $aneti2->setDateAneti(new \DateTime("28-01-2018"));
        $aneti2->setIdGouvernorat("12");
        $aneti2->setLibGouvernorat("Kasserine");
        $aneti2->setIdDelegation("1155");
        $aneti2->setLibDelegation("Sbiba");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("12");
        $aneti2->setLibSector("Agroalimentaire");
        $aneti2->setTaille("1");
        $aneti2->setLibTaille("10 ET PLUS");
        $aneti2->setNombre("9");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Kasserine"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Sbeïtla"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Transport"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2018");
        $aneti2->setMois("2");
        $aneti2->setDateAneti(new \DateTime("06-02-2018"));
        $aneti2->setIdGouvernorat("12");
        $aneti2->setLibGouvernorat("Kasserine");
        $aneti2->setIdDelegation("1156");
        $aneti2->setLibDelegation("Sbeïtla");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("11");
        $aneti2->setLibSector("Transport");
        $aneti2->setTaille("0");
        $aneti2->setLibTaille("MOINS de 10");
        $aneti2->setNombre("21");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Kasserine"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Sbiba"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Agroalimentaire"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2018");
        $aneti2->setMois("3");
        $aneti2->setDateAneti(new \DateTime("30-03-2018"));
        $aneti2->setIdGouvernorat("12");
        $aneti2->setLibGouvernorat("Kasserine");
        $aneti2->setIdDelegation("1155");
        $aneti2->setLibDelegation("Sbiba");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("12");
        $aneti2->setLibSector("Agroalimentaire");
        $aneti2->setTaille("1");
        $aneti2->setLibTaille("10 ET PLUS");
        $aneti2->setNombre("15");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);


        //Sfax
        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Sfax"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Mahrès"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Transport"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2018");
        $aneti2->setMois("4");
        $aneti2->setDateAneti(new \DateTime("01-04-2018"));
        $aneti2->setIdGouvernorat("13");
        $aneti2->setLibGouvernorat("Sfax");
        $aneti2->setIdDelegation("1157");
        $aneti2->setLibDelegation("Mahrès");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("11");
        $aneti2->setLibSector("Transport");
        $aneti2->setTaille("0");
        $aneti2->setLibTaille("MOINS de 10");
        $aneti2->setNombre("6");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Sfax"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Sfax Ville"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Agroalimentaire"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2016");
        $aneti2->setMois("10");
        $aneti2->setDateAneti(new \DateTime("08-10-2016"));
        $aneti2->setIdGouvernorat("13");
        $aneti2->setLibGouvernorat("Sfax");
        $aneti2->setIdDelegation("1158");
        $aneti2->setLibDelegation("Sfax Ville");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("12");
        $aneti2->setLibSector("Agroalimentaire");
        $aneti2->setTaille("1");
        $aneti2->setLibTaille("10 ET PLUS");
        $aneti2->setNombre("2");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);


        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Sfax"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Mahrès"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Transport"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2017");
        $aneti2->setMois("9");
        $aneti2->setDateAneti(new \DateTime("08-09-2017"));
        $aneti2->setIdGouvernorat("12");
        $aneti2->setLibGouvernorat("Sfax");
        $aneti2->setIdDelegation("1157");
        $aneti2->setLibDelegation("Mahrès");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("11");
        $aneti2->setLibSector("Transport");
        $aneti2->setTaille("0");
        $aneti2->setLibTaille("MOINS de 10");
        $aneti2->setNombre("1");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Sfax"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Sfax Ville"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Agroalimentaire"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2018");
        $aneti2->setMois("12");
        $aneti2->setDateAneti(new \DateTime("08-12-2018"));
        $aneti2->setIdGouvernorat("12");
        $aneti2->setLibGouvernorat("Sfax");
        $aneti2->setIdDelegation("1158");
        $aneti2->setLibDelegation("Sfax Ville");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("12");
        $aneti2->setLibSector("Agroalimentaire");
        $aneti2->setTaille("1");
        $aneti2->setLibTaille("10 ET PLUS");
        $aneti2->setNombre("10");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Sfax"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Mahrès"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Transport"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2017");
        $aneti2->setMois("9");
        $aneti2->setDateAneti(new \DateTime("08-09-2017"));
        $aneti2->setIdGouvernorat("12");
        $aneti2->setLibGouvernorat("Sfax");
        $aneti2->setIdDelegation("1157");
        $aneti2->setLibDelegation("Mahrès");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("11");
        $aneti2->setLibSector("Transport");
        $aneti2->setTaille("0");
        $aneti2->setLibTaille("MOINS de 10");
        $aneti2->setNombre("2");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);


        //Tozeur
        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Tozeur"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Degache"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Agroalimentaire"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2015");
        $aneti2->setMois("1");
        $aneti2->setDateAneti(new \DateTime("01-01-2015"));
        $aneti2->setIdGouvernorat("14");
        $aneti2->setLibGouvernorat("Tozeur");
        $aneti2->setIdDelegation("1159");
        $aneti2->setLibDelegation("Degache");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("12");
        $aneti2->setLibSector("Agroalimentaire");
        $aneti2->setTaille("1");
        $aneti2->setLibTaille("10 ET PLUS");
        $aneti2->setNombre("19");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Tozeur"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Nefta"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Transport"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2017");
        $aneti2->setMois("11");
        $aneti2->setDateAneti(new \DateTime("28-11-2017"));
        $aneti2->setIdGouvernorat("14");
        $aneti2->setLibGouvernorat("Tozeur");
        $aneti2->setIdDelegation("1160");
        $aneti2->setLibDelegation("Nefta");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("11");
        $aneti2->setLibSector("Transport");
        $aneti2->setTaille("0");
        $aneti2->setLibTaille("MOINS de 10");
        $aneti2->setNombre("20");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);


        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Tozeur"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Degache"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Agroalimentaire"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2020");
        $aneti2->setMois("3");
        $aneti2->setDateAneti(new \DateTime("01-03-2020"));
        $aneti2->setIdGouvernorat("14");
        $aneti2->setLibGouvernorat("Tozeur");
        $aneti2->setIdDelegation("1159");
        $aneti2->setLibDelegation("Degache");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("12");
        $aneti2->setLibSector("Agroalimentaire");
        $aneti2->setTaille("1");
        $aneti2->setLibTaille("10 ET PLUS");
        $aneti2->setNombre("10");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Tozeur"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Nefta"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Transport"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2016");
        $aneti2->setMois("7");
        $aneti2->setDateAneti(new \DateTime("05-07-2016"));
        $aneti2->setIdGouvernorat("14");
        $aneti2->setLibGouvernorat("Tozeur");
        $aneti2->setIdDelegation("1160");
        $aneti2->setLibDelegation("Nefta");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("11");
        $aneti2->setLibSector("Transport");
        $aneti2->setTaille("0");
        $aneti2->setLibTaille("MOINS de 10");
        $aneti2->setNombre("6");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        $aneti2 = new AnetiTable2();
        $gouvernorat = $manager->getRepository('MfpeReferencielBundle:RefGouvernorat')->findOneBy(array("intituleFr" => "Tozeur"));
        $aneti2->setGouvernorat($gouvernorat);
        $delegation = $manager->getRepository('MfpeReferencielBundle:RefDelegation')->findOneBy(array("intituleFr" => "Degache"));
        $aneti2->setDelegation($delegation);
        $secteur = $manager->getRepository('MfpeReferencielBundle:RefSecteur')->findOneBy(array("intituleFr" => "Agroalimentaire"));
        $aneti2->setSector($secteur);
        $aneti2->setAnnee("2020");
        $aneti2->setMois("2");
        $aneti2->setDateAneti(new \DateTime("02-02-2020"));
        $aneti2->setIdGouvernorat("14");
        $aneti2->setLibGouvernorat("Tozeur");
        $aneti2->setIdDelegation("1159");
        $aneti2->setLibDelegation("Degache");
        $aneti2->setBureau("1110");
        $aneti2->setLibBureau("BAB BHAR");
        $aneti2->setIdSector("12");
        $aneti2->setLibSector("Agroalimentaire");
        $aneti2->setTaille("1");
        $aneti2->setLibTaille("10 ET PLUS");
        $aneti2->setNombre("1");
        $aneti2->setEnable("true");
        $manager->persist($aneti2);

        $manager->flush();

    }
}