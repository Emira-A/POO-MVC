<?php

// On déclare le namespace après l'ajout des composer sur le terminal. Il indique où se situe notre class dans l'arborésance des dossiers en partant de App
namespace App\Controller; 

// lorsqu'on crée un controller on ajoute toujours "Controller" au nom
class DefaultController{

    // La fonction "home" est ce qu'on appelle une "action". Une action est une page. 

    // Page d'Accueil du site
    public function home(){
        //echo "<h1>Page d'Accueil | Controller </h1>";
        // ici on remplace le echo par le include de VIEWS 
        include(VIEWS.'default/home.php'); 
    }

    // page permettant de lister les articles d'une catégorie. 
    public function category(){
        include(VIEWS.'default/category.php');
    }

    // page permettant d'afficher un article. 
    public function post(){
        include(VIEWS.'default/post.php');
    }

}