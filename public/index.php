<?php

// Importation des Controllers
// On a remplacer les require pour chaque page par le autolaod.php qui importe automatiquement les class pour nous 
require_once '../autoload.php'; 

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

// Récupération des paramètres GET et affectation dans une variable. 
$controller = ucfirst($_GET['controller']) . 'Controller'; 
$action = $_GET['action']; 

// Approche avec variable PHP dynamique  
$$controller = new $controller(); 
${$controller}->$action(); 


