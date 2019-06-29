<?php
use PDO;
namespace app\models;
class Connection {
    public static function connect(){
        $pdo = new PDO("mysql:host=localhost;dbname=users", "users","root");
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;
        $adicioneiDeNovoEssaBudega;
        #comentario 
    }
    
}
