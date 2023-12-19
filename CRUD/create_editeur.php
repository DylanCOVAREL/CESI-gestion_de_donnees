<?php
// create_editeur.php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "bootstrap.php";

// Création d'une instance de l'entité Editeur
$editeur = new App\Entity\Editeur();
$editeur->setNom("Take-Two Interactive");
$editeur->setDateCrea(new \DateTime("1993-12-01"));
$editeur->setSiegeSocial("New York");
$editeur->setActivite("Industrie vidéoludique");
$editeur->setProduit("Jeux vidéo");
$editeur->setEffectif(7799);
$editeur->setDirection("Strauss Zelnick");

// Persistez l'entité dans la base de données
$entityManager->persist($editeur);

// Exécutez la transaction pour persister l'entité dans la base de données
$entityManager->flush();

echo "L'éditeur a été ajouté avec succès à la base de données.\n";
