<?php
// read_editeurs.php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "bootstrap.php";

// Récupération de l'EntityManager
$entityManager = EntityManager::create($dbParams, $config);

// Récupération de tous les éditeurs depuis la table Editeur
$editeurs = $entityManager->getRepository(\App\Entity\Editeur::class)->findAll();

// Affichage des données
echo "Liste des éditeurs :\n";
foreach ($editeurs as $editeur) {
    echo "ID: " . $editeur->getId() . "\n";
    echo "Nom: " . $editeur->getNom() . "\n";
    echo "Date de création: " . $editeur->getDateCrea()->format('Y-m-d') . "\n";
    echo "Siège social: " . $editeur->getSiegeSocial() . "\n";
    echo "Activité: " . $editeur->getActivite() . "\n";
    echo "Produit: " . $editeur->getProduit() . "\n";
    echo "Effectif: " . $editeur->getEffectif() . "\n";
    echo "Direction: " . $editeur->getDirection() . "\n";
    echo "----------------------------------------------";
    // Ajoutez d'autres propriétés au besoin
    echo "\n";
}
