<?php

// On déclare le namespace après l'ajout des composer sur le terminal. Il indique où se situe notre class dans l'arborésance des dossiers en partant de App
namespace App\Controller; 

// On ajoute le use pour indiquer à php ou se situe la classe Category pour ici récupérer la BDD
use App\Models\Category; 

// lorsqu'on crée un controller on ajoute toujours "Controller" au nom
// On a ajouté l'extends AbstractController qui a fonction d'héritage
class DefaultController extends AbstractController{

    // La fonction "home" est ce qu'on appelle une "action". Une action est une page. 

    // Page d'Accueil du site
    public function home(){
        //echo "<h1>Page d'Accueil | Controller </h1>";
        // ici on remplace le echo par le include de VIEWS 

        // je remplace mon include par le $this->render() aprés la création de mon AbstractController
        $this->render('default/home'); 
        // include(VIEWS.'default/home.php'); 
    }

    // page permettant de lister les articles d'une catégorie. 
    public function category(){

        // récupération des catégories de la BDD 
        $categories = Category::findAll(); 

        // vérification des résultats
        dump($categories); 

        $this->render('default/category'); 
        //include(VIEWS.'default/category.php');
    }

    // page permettant d'afficher un article. 
    public function post(){

        $this->render('default/post'); 
        //include(VIEWS.'default/post.php');
    }
}