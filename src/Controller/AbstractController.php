<?php
namespace App\Controller; 

// Une classe "abstract" ne peut pas etre instancier, donc elle ne peut pas avoir d'objet. Pour l'utiliser elle doit OBLIGATOIREMENT être HERITER. Pour l'utiliser on doit passer par de l'héritage. 
// Certaines classes sont là pour aider d'autre classes, mais n'ont pas vocation d'éttre utiliser directement. "abstract" va aider le controller mais n'as pas pour vocation d'être utiliser tel quel.

abstract class AbstractController{

    // Permet de retourner la page de l'utilisateur. 
    // @param string $view ex: default/home
    
    protected function render(string $view){

        include(VIEWS . $view . '.php'); 
    }

}