<?php

/*
 * Ici, notre fichier index.php représente
 * notre controleur frontal.
 * -----------------------------------------
 * Il a pour charge de rediriger la requète
 * de l'utilisateur vers le bon controleur
 * en s'aidant des paramètres dans l'URL.
 */

// Aperçu de $_GET
/*
echo '<pre>'; 
print_r($_GET); 
echo '</pre>'; 
*/

// Importantion de la configuration (à mettre avant l'autoload)
require_once '../config/config.php'; 

// Autochargement des classes
// On a remplacer les require pour chaque page par le autolaod.php qui importe automatiquement les class pour nous 
require_once '../autoload.php'; 


// ici on a fait un cmd -> x des 4 lignes puis on les a coller dans le fichier app.php


// Chargement de notre application 
require_once '../app.php'; 
