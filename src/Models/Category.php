<?php
namespace App\Models; 

class Category extends DB{

    // retourner tous les enregistrements de catégories de la BDD
    public static function findAll(){

        $request = "SELECT * FROM category"; 
        $response = self::getDb()->prepare($request); 
        $response->execute(); 

        return $response->fetchAll(\PDO::FETCH_ASSOC); 
    }
}


// $self fait référence à la classe