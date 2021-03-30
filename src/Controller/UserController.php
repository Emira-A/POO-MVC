<?php

// On déclare le namespace après l'ajout des composer sur le terminal. Il indique où se situe notre class dans l'arborésance des dossiers en partant de App
namespace App\Controller; 

class UserController{

    // Page d'inscription 
    public function register(){
        echo "<h1>Page Inscription | Controller </h1>";
    }

    // Page Connexion
    public function login(){
        echo "<h1>Page Connexion | Controller </h1>";
    }

}