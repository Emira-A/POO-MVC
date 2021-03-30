<?php

// Récupération des paramètres GET et affectation dans une variable. 
$controller = ucfirst($_GET['controller']) . 'Controller'; 
$action = $_GET['action']; 

dump($_GET); 

// Approche avec variable PHP dynamique  
$$controller = new $controller(); 
${$controller}->$action(); 
