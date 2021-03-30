<?php

// Récupération des paramètres GET et affectation dans une variable. 
// on ajoute 'App\\Controller\\' après avoir déclarer le namespace dans DefaultController et UserController
$controller = 'App\\Controller\\' . ucfirst($_GET['controller']) . 'Controller'; 
$action = $_GET['action']; 

// dump($_GET); 

// Approche avec variable PHP dynamique  
$$controller = new $controller(); 
${$controller}->$action(); 
