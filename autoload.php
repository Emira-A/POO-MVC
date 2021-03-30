<?php

// Permet d'automatiser le chargement des classes de notre projet. 
// on met ce qu'on veut dans la fonction, ici $class mais ça peut etre ce que l'on veut il se met automatiquement 
spl_autoload_register(function($class){
    echo "Chargement de : $class <br>"; 
    require_once "src/Controller/$class.php"; 
}); 