<?php
// create_stored_procedure.php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "bootstrap.php";

// Récupération de l'EntityManager
$entityManager = EntityManager::create($connectionOptions, $config);

// Nom de la procédure stockée
$storedProcedure = 'Trie sur effectif';

// Définition du corps de la procédure stockée
$storedProcSQL = "
    CREATE PROCEDURE $storedProcedure(IN nb INT)
    BEGIN
        SELECT * FROM Editeur WHERE effectif > nb
    END;
";

// Exécution de la requête SQL pour créer la procédure stockée
$entityManager->getConnection()->exec($storedProcSQL);

echo "La procédure stockée '$storedProcedure' a été créée avec succès.\n";
