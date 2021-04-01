<?php

namespace App\Models; 

class Db{

    // permet de récupérer la connexion à la BDD avec PDO. 
    protected static function getDb(){

        return new \PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=' . DB_PORT ,
            DB_USER,
            DB_PSWD,
            array(
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING,
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            )
        );
    }
}

// on est dans le namespace APP\models donc php considère que PDO est une classe de Models. Pour pas que php se trompe on lui indique que la Class PDO n'est pas dans le namespace APP/MODELS mais dans le namespace de php -> donc on met un '\' devant PDO

// On met directement return new \PDO au lieu de $pdo = new \PDO puis à la fon return $pdo dans la fonction 

// une fonction 'static' c'est une fonction qui n'est pas rattaché à l'objet mais qui est rattaché à la Classe