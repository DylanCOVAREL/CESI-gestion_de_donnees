<?php
// delete_editeur.php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "bootstrap.php";

// Récupération de l'EntityManager
$entityManager = EntityManager::create($dbParams, $config);

// Récupération de l'entité Editeur à supprimer
$editeurId = 1;
$editeur = $entityManager->find(\App\Entity\Editeur::class, $editeurId);

if ($editeur) {
    // Suppression de l'entité
    $entityManager->remove($editeur);

    // Persistez les changements dans la base de données
    $entityManager->flush();

    echo "L'éditeur a été supprimé avec succès.\n";
} else {
    echo "L'éditeur avec l'ID $editeurId n'a pas été trouvé.\n";
}
