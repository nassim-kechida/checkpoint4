<?php

namespace App\DataFixtures;

use App\Entity\Marque;
use App\Entity\Modele;
use App\Entity\Voiture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $marque1 = new Marque();
        $marque1->setLibelle("Toyota");
        $manager->persist($marque1);
        $marque2 = new Marque();
        $marque2->setLibelle("Peugeot");
        $manager->persist($marque2);

        $modele1 = new Modele();
        $modele1->setLibelle("yaris")
                ->setImage("modele1.jpg")
                ->setPrixMoyen(15000)
                ->setMarque($marque1);
        $manager->persist($modele1);

        $modele2 = new Modele();
        $modele2->setLibelle("Nassim")
                ->setImage("modele2.jpg")
                ->setPrixMoyen(20000)
                ->setMarque($marque1);
        $manager->persist($modele2);

        $modele3 = new Modele();
        $modele3->setLibelle("007")
                ->setImage("modele3.jpg")
                ->setPrixMoyen(30000)
                ->setMarque($marque1);
        $manager->persist($modele3);

        $modele4 = new Modele();
        $modele4->setLibelle("008")
                ->setImage("modele4.jpg")
                ->setPrixMoyen(10000)
                ->setMarque($marque1);
        $manager->persist($modele4);

        $modele5 = new Modele();
        $modele5->setLibelle("009")
                ->setImage("modele5.jpg")
                ->setPrixMoyen(17000)
                ->setMarque($marque1);
        $manager->persist($modele5);

        $modeles = [$modele1,$modele2,$modele3,$modele4,$modele5];

        $faker = \Faker\Factory::create('fr_FR');
        foreach($modeles as $m){
            $rand = rand(3,5);
            for($i=1; $i <= $rand; $i++){
                $voiture = new Voiture();
                $voiture->setImmatriculation($faker->regexify("[A-Z]{2}[0-9]{3,4}[A-Z]{2}"))
                        ->setNbPortes($faker->randomElement($array = array(3,5)))
                        ->setAnnee($faker->numberBetween($min=1990,$max=2020))
                        ->setModele($m);
                $manager->persist($voiture);
            }
        }



        $manager->flush();
    }
}
